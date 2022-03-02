<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\TCategoria;
use App\Models\TDestino;
use App\Models\THotel;
use App\Models\TPais;
use App\Models\TPaquete;
use App\Models\TPaqueteCategoria;
use App\Models\TPaqueteDestino;
use App\Models\TPost;
use App\Models\TTeam;
use App\Models\TTestimonio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $paquete_recommended = TPaquete::
        with('imagen_paquetes','paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')
            ->where('estado', '1')
            ->get();

        $testinomials = TTestimonio::all();

        $paquetes_features = TPaquete::
        with('imagen_paquetes','paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')
            ->where('offers_home', '1')
            ->get();

        $blogs_first = TPost::latest('id')->first();

        $faqs = Faq::all();

        $category_block = TCategoria::where('estado', 1)->get();
        $category_footer = TCategoria::where('orden_block', 1)->get();

        $destination = TDestino::all();
        $destination_p = TDestino::distinct('pais')->pluck('pais');

        return view('page.home',
            compact(
                'paquete_recommended',
                'testinomials',
                'paquetes_features',
                'blogs_first',
                'faqs',
                'category_block',
                'category_footer',
                'destination',
                'destination_p'
            ));
    }


    public function packages() {
        $paquetes = TPaquete::where('is_p_t', '1')->get();
        return view('page.packages',
            compact(
                'paquetes'
            ));
    }

    public function packages_detail($url) {
//        $paquetes_api = Http::get(env('APP_URL').'/api/packages/'.$url);
//        $paquetes_api = $paquetes_api->json();

        $paquetes = TPaquete::
        with('imagen_paquetes','paquetes_destinos.destinos.destino_imagen','paquetes_categoria.categoria', 'precio_paquetes', 'paquete_itinerario')
            ->where('url', $url)
            ->get();

        return view('page.detail',
            compact(
                'paquetes'
            ));
    }

    public function destinations() {
        $destinations = TDestino::all();
        $pais = TPais::all();
        return view('page.destination', compact('destinations','pais'));
    }

    public function destinations_show(TPais $pais) {
//        return $destinations->id;
//        $paquetes_api = Http::get(env('APP_URL').'/api/packages/destinations/'.$destinations->id);
//        $paquetes_api = $paquetes_api->json();

//        $paquetes = TPaquete::where('is_p_t', 1)
//            ->paquetes_destinos($destinations->id)
////            ->latest('id')
//            ->paginate(8);
//
//
//        return $paquetes;
//        $paquetes_api = TPaqueteDestino::
//        with('paquetes.precio_paquetes','destinos', 'paquetes.paquetes_destinos.destinos')
//            ->where('iddestinos', $destinations->id)
//            ->get();

//        dd($pais);

        $destinations = TDestino::where('idpais', $pais->id)->get();


        return view('page.destination-show', compact('destinations', 'pais'));
    }

    public function destinations_destino_show(TPais $pais, TDestino $destino) {
//        return $destinations->id;
//        $paquetes_api = Http::get(env('APP_URL').'/api/packages/destinations/'.$destinations->id);
//        $paquetes_api = $paquetes_api->json();

//        $paquetes = TPaquete::where('is_p_t', 1)
//            ->paquetes_destinos($destinations->id)
////            ->latest('id')
//            ->paginate(8);
//
//
//        return $paquetes;
        $paquetes_api = TPaqueteDestino::
        with('paquetes.precio_paquetes','destinos', 'paquetes.paquetes_destinos.destinos')
            ->where('iddestinos', $destino->id)
            ->get();

//        dd($pais);

        $destinations = TDestino::all();


        return view('page.destinations-packages', compact('paquetes_api', 'pais', 'destinations'));
    }

    public function category() {
        $category = TCategoria::all();
        return view('page.category', compact('category'));
    }
    public function category_show(TCategoria $categories) {
//        return $destinations->id;
//        $paquetes_api = Http::get(env('APP_URL').'/api/packages/destinations/'.$destinations->id);
//        $paquetes_api = $paquetes_api->json();

//        $paquetes = TPaquete::where('is_p_t', 1)
//            ->paquetes_destinos($destinations->id)
////            ->latest('id')
//            ->paginate(8);
//
//
//        return $paquetes;
        $paquetes_api = TPaqueteCategoria::
        with('paquetes.precio_paquetes','categoria', 'paquetes.paquetes_categoria.categoria')
            ->where('idcategoria', $categories->id)
            ->get();


        return view('page.category-show', compact('paquetes_api', 'categories'));
    }

    public function about(){
        $teams = TTeam::all();
        return view('page.about', compact('teams'));
    }
    public function book(){
        return view('page.book');
    }
    public function confidence(){
        return view('page.confidence');
    }
    public function conditions(){
        return view('page.conditions');
    }
    public function faq(){
        $faqs = Faq::all();
        return view('page.faq', compact('faqs'));
    }



    public function hotels(){
        $hotels = THotel::all();
        return view('page.hotels', compact('hotels'));
    }

    public function responsability(){
        return view('page.responsability');
    }

    public function reviews(){
        $testinomials = TTestimonio::all();
        return view('page.reviews', compact('testinomials'));
    }

    public function tours(){
        $paquetes = TPaquete::where('is_p_t', '0')->get();

        return view('page.tours',
            compact(
                'paquetes'
            ));
    }
    public function blog(){
        $blogs = TPost::latest('id')->get();
        $blogs_first = TPost::latest('id')->first();
        return view('page.blog', compact('blogs_first','blogs'));
    }
    public function blog_show(TPost $post){
        return view('page.blog-show', compact('post'));
    }
}
