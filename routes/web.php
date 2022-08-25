<?php

use App\Http\Controllers\API\FormpageController;
use App\Http\Controllers\Page\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/'.__('message.url_1'), [HomeController::class, 'packages'])->name('packages.all');
Route::get('/'.__('message.url_1').'/{paquete}', [HomeController::class, 'packages_detail'])->name('packages.detail');

Route::get('/'.__('message.url_2'), [HomeController::class, 'destinations'])->name('destinations.all');
Route::get('/'.__('message.url_2').'/{destinations}', [HomeController::class, 'destinations_show'])->name('destinations.show');

Route::get('/category', [HomeController::class, 'category'])->name('category.all');
Route::get('/category/{categories}', [HomeController::class, 'category_show'])->name('category.show');

Route::get('/'.__('message.url_3'), [HomeController::class, 'about'])->name('about');
Route::get('/'.__('message.url_4'), [HomeController::class, 'book'])->name('book');
Route::get('/'.__('message.url_5'), [HomeController::class, 'confidence'])->name('confidence');
Route::get('/'.__('message.url_6'), [HomeController::class, 'conditions'])->name('conditions');
Route::get('/'.__('message.url_7'), [HomeController::class, 'faq'])->name('faq');

Route::get('/'.__('message.url_8'), [HomeController::class, 'hotels'])->name('hotels');
Route::get('/'.__('message.url_9'), [HomeController::class, 'responsability'])->name('responsability');
Route::get('/'.__('message.url_10'), [HomeController::class, 'reviews'])->name('reviews');
Route::get('/'.__('message.url_11'), [HomeController::class, 'tours'])->name('tours');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [HomeController::class, 'blog_show'])->name('blog.show');

//form inquire
Route::post('/formulario-diseno', [FormpageController::class, 'formulario_diseno'])->name('formulario_diseno');

