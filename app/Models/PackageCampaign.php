<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageCampaign extends Model
{
    protected $fillable = [
        'package_id', 'slug', 'name', 'is_active', 'starts_at', 'ends_at',
        'headline', 'subtitle', 'hero_image', 'offer_label', 'original_price',
        'offer_price', 'price_category', 'cta_label', 'config',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'original_price' => 'decimal:2',
        'offer_price' => 'decimal:2',
        'config' => 'array',
    ];

    public function package()
    {
        return $this->belongsTo(TPaquete::class, 'package_id');
    }
}
