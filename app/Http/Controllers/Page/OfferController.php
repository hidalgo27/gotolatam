<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TPaquete;

class OfferController extends Controller
{
    public function show($packageSlug, $campaignSlug)
    {
        $paquete = TPaquete::where('url', $packageSlug)->firstOrFail();
        $campaign = $paquete->campaigns()->where('slug', $campaignSlug)->firstOrFail();

        $now = now();
        abort_unless($campaign->is_active, 404);
        abort_if($campaign->starts_at && $now->lt($campaign->starts_at), 404);

        if ($campaign->ends_at && $now->gte($campaign->ends_at)) {
            return redirect()->route('packages.detail', array_merge(
                ['paquete' => $paquete],
                request()->only(['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid', 'fbclid'])
            ), 302);
        }

        $detail = app(HomeController::class)->packages_detail($paquete);

        return view('page.offer', array_merge($detail->getData(), ['campaign' => $campaign]));
    }
}
