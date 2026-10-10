<?php
// /routes/web.php

use App\Http\Controllers\API\FormpageController;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\OfferController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

///*Route::get('/', function () {
//    return view('welcome');
//});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/' . __('message.url_1'), [HomeController::class, 'packages'])->name('packages.all');
Route::get('/' . __('message.url_1') . '/{paquete}', [HomeController::class, 'packages_detail'])->name('packages.detail');

Route::get('/offers/{packageSlug}/{campaignSlug}', [OfferController::class, 'show'])->name('offers.show');

Route::get('/'.__('message.url_2'), [HomeController::class, 'destinations'])->name('destinations.all');
Route::get('/'.__('message.url_2').'/{pais}', [HomeController::class, 'destinations_show'])->name('destinations.show');
Route::get('/'.__('message.url_2').'/{pais}/{destino}', [HomeController::class, 'destinations_destino_show'])->name('destinations.destino.show');

Route::get('/countries/{number}', [HomeController::class, 'country_show'])->name('country.show');

Route::get('/category', [HomeController::class, 'category'])->name('category.all');
Route::get('/category/{categories}', [HomeController::class, 'category_show'])->name('category.show');

Route::get('/' . __('message.url_3'), [HomeController::class, 'about'])->name('about');
Route::get('/' . __('message.url_4'), [HomeController::class, 'book'])->name('book');
Route::get('/' . __('message.url_5'), [HomeController::class, 'confidence'])->name('confidence');
Route::get('/' . __('message.url_6'), [HomeController::class, 'conditions'])->name('conditions');
Route::get('/' . __('message.url_7'), [HomeController::class, 'faq'])->name('faq');

Route::get('/' . __('message.url_8'), [HomeController::class, 'hotels'])->name('hotels');
Route::get('/' . __('message.url_9'), [HomeController::class, 'responsability'])->name('responsability');
Route::get('/' . __('message.url_10'), [HomeController::class, 'reviews'])->name('reviews');
Route::get('/' . __('message.url_11'), [HomeController::class, 'tours'])->name('tours');
Route::get('/' . __('message.url_12'), [HomeController::class, 'careers'])->name('careers');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [HomeController::class, 'blog_show'])->name('blog.show');

Route::get('/'.__('message.url_3').'/our-team', [HomeController::class, 'our_team'])->name('our_team');
Route::get('/'.__('message.url_3').'/our-team/{id}', [HomeController::class, 'team_member'])->name('member');

//form inquire
Route::post('/formulario-diseno', [FormpageController::class, 'formulario_diseno'])->name('formulario_diseno');



Route::get('/test-kommo/account', function () {
    abort_unless(app()->environment('local'), 404);

    $response = Http::withToken(
        config('services.kommo.token')
    )
        ->acceptJson()
        ->get(
            'https://' .
            config('services.kommo.subdomain') .
            '.kommo.com/api/v4/account'
        );

    return response()->json([
        'status' => $response->status(),
        'successful' => $response->successful(),
        'account' => $response->successful()
            ? [
                'id' => $response->json('id'),
                'name' => $response->json('name'),
                'subdomain' => $response->json('subdomain'),
            ]
            : null,
        'error' => $response->failed()
            ? $response->json()
            : null,
    ], $response->status());
});


Route::get('/test-kommo/configuration', function () {
    abort_unless(app()->environment('local'), 404);

    $baseUrl = sprintf(
        'https://%s.kommo.com/api/v4',
        config('services.kommo.subdomain')
    );

    $client = Http::withToken(config('services.kommo.token'))
        ->acceptJson()
        ->timeout(20);

    $pipelinesResponse = $client->get(
        "{$baseUrl}/leads/pipelines"
    );

    $usersResponse = $client->get(
        "{$baseUrl}/users"
    );

    $leadFieldsResponse = $client->get(
        "{$baseUrl}/leads/custom_fields"
    );

    $contactFieldsResponse = $client->get(
        "{$baseUrl}/contacts/custom_fields"
    );

    return response()->json([
        'pipelines_status' => $pipelinesResponse->status(),

        'pipelines' => collect(
            $pipelinesResponse->json('_embedded.pipelines', [])
        )->map(function (array $pipeline) {
            return [
                'id' => $pipeline['id'] ?? null,
                'name' => $pipeline['name'] ?? null,
                'is_main' => $pipeline['is_main'] ?? false,

                'statuses' => collect(
                    data_get($pipeline, '_embedded.statuses', [])
                )->map(function (array $status) {
                    return [
                        'id' => $status['id'] ?? null,
                        'name' => $status['name'] ?? null,
                        'sort' => $status['sort'] ?? null,
                    ];
                })->values(),
            ];
        })->values(),

        'users_status' => $usersResponse->status(),

        'users' => collect(
            $usersResponse->json('_embedded.users', [])
        )->map(function (array $user) {
            return [
                'id' => $user['id'] ?? null,
                'name' => $user['name'] ?? null,
                'email' => $user['email'] ?? null,
                'rights' => [
                    'is_admin' => data_get(
                        $user,
                        'rights.is_admin',
                        false
                    ),
                    'is_active' => data_get(
                        $user,
                        'rights.is_active',
                        false
                    ),
                ],
            ];
        })->values(),

        'lead_fields_status' => $leadFieldsResponse->status(),

        'lead_fields' => collect(
            $leadFieldsResponse->json(
                '_embedded.custom_fields',
                []
            )
        )->map(function (array $field) {
            return [
                'id' => $field['id'] ?? null,
                'name' => $field['name'] ?? null,
                'code' => $field['code'] ?? null,
                'type' => $field['type'] ?? null,

                'enums' => collect(
                    $field['enums'] ?? []
                )->map(function (array $enum) {
                    return [
                        'id' => $enum['id'] ?? null,
                        'value' => $enum['value'] ?? null,
                        'sort' => $enum['sort'] ?? null,
                    ];
                })->values(),
            ];
        })->values(),

        'contact_fields_status' => $contactFieldsResponse->status(),

        'contact_fields' => collect(
            $contactFieldsResponse->json(
                '_embedded.custom_fields',
                []
            )
        )->map(function (array $field) {
            return [
                'id' => $field['id'] ?? null,
                'name' => $field['name'] ?? null,
                'code' => $field['code'] ?? null,
                'type' => $field['type'] ?? null,

                'enums' => collect(
                    $field['enums'] ?? []
                )->map(function (array $enum) {
                    return [
                        'id' => $enum['id'] ?? null,
                        'value' => $enum['value'] ?? null,
                        'sort' => $enum['sort'] ?? null,
                    ];
                })->values(),
            ];
        })->values(),
    ]);
});
