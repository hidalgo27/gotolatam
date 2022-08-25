<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\TCategoria;
use App\Models\TDestino;
use App\Models\THotel;
use App\Models\THotelDestino;
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

//        $pipedrive = new Pipedrive(config('services.pipedrive.token'));
//        $organizations = $pipedrive->organizations()->all();

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

        $category = TCategoria::all();
        $category_block = TCategoria::where('estado', 1)->get();
        $category_footer = TCategoria::where('orden_block', 1)->get();

        $destination = TDestino::all();

        return view('page.home',
            compact(
                'paquete_recommended',
                'testinomials',
                'paquetes_features',
                'blogs_first',
                'faqs',
                'category',
                'category_block',
                'category_footer',
                'destination'
            ));
    }


    public function packages() {
        $paquetes = TPaquete::where('is_p_t', '1')->orderBy('duracion')->get();
        $category = TCategoria::all();
        return view('page.packages',
            compact(
                'paquetes',
                'category'
            ));
    }

    public function packages_detail(TPaquete $paquete) {
//        $paquetes_api = Http::get(env('APP_URL').'/api/packages/'.$url);
//        $paquetes_api = $paquetes_api->json();

//        $destinos_hoteles = TDestino::whereRelationx('hotel_destinos', 'idhotel', 25)->get();

//        dd($destinos_hoteles);

//        $paquetes = TPaquete::
//        with('imagen_paquetes','paquetes_destinos.destinos.destino_imagen','paquetes_categoria.categoria', 'precio_paquetes', 'paquete_itinerario')->get();

        $testinomials = TTestimonio::all();
        $testinomials_r = TTestimonio::inRandomOrder()->limit(1)->get();
        $category = TCategoria::all();

        $hoteles_destinos = THotelDestino::all();

        return view('page.detail',
            compact(
                'paquete',
                'category',
                'testinomials',
                'hoteles_destinos',
                'testinomials_r'
            ));
    }

    public function destinations() {
        $destinations = TDestino::all();
        $category = TCategoria::all();
        $pais = TPais::all();

        return view('page.destination', compact('destinations', 'category', 'pais'));
    }

//    public function destinations() {
//        $destinations = TDestino::all();
//        $pais = TPais::all();
//        return view('page.destination', compact('destinations','pais'));
//    }

//    public function destinations_show(TDestino $destinations) {
////        return $destinations->id;
////        $paquetes_api = Http::get(env('APP_URL').'/api/packages/destinations/'.$destinations->id);
////        $paquetes_api = $paquetes_api->json();
//
////        $paquetes = TPaquete::where('is_p_t', 1)
////            ->paquetes_destinos($destinations->id)
//////            ->latest('id')
////            ->paginate(8);
////
////
////        return $paquetes;
////        $paquetes_api = TPaqueteDestino::
////        with('paquetes.precio_paquetes','destinos', 'paquetes.paquetes_destinos.destinos')
////            ->where('iddestinos', $destinations->id)
////            ->get();
////        $category = TCategoria::all();
////
////        return view('page.destination-show', compact('paquetes_api', 'destinations', 'category'));
//
//        $destinations = TDestino::where('idpais', $pais->id)->get();
//
//
//        return view('page.destination-show', compact('destinations', 'pais'));
//    }

    public function category() {
        $category = TCategoria::all();
        return view('page.category', compact('category'));
    }
//    public function category_show(TCategoria $categories) {
////        return $destinations->id;
////        $paquetes_api = Http::get(env('APP_URL').'/api/packages/destinations/'.$destinations->id);
////        $paquetes_api = $paquetes_api->json();
//
////        $paquetes = TPaquete::where('is_p_t', 1)
////            ->paquetes_destinos($destinations->id)
//////            ->latest('id')
////            ->paginate(8);
////
////
////        return $paquetes;
//        $paquetes_api = TPaqueteCategoria::
//        with('paquetes.precio_paquetes','categoria', 'paquetes.paquetes_categoria.categoria')
//            ->where('idcategoria', $categories->id)
//            ->get();
//
//        $category = TCategoria::all();
//
//        return view('page.category-show', compact('paquetes_api', 'categories', 'category'));
//    }


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


        return view('page.destinations-packages', compact('paquetes_api', 'pais', 'destinations', 'destino'));
    }

    public function about(){
        $teams = TTeam::all();
        $category = TCategoria::all();
        return view('page.about', compact('teams','category'));
    }
    public function book(){
        $category = TCategoria::all();
        return view('page.book',compact('category'));
    }
    public function confidence(){
        $category = TCategoria::all();
        return view('page.confidence', compact('category'));
    }
    public function conditions(){
        $category = TCategoria::all();
        return view('page.conditions', compact('category'));
    }
    public function faq(){
        $faqs = Faq::all();
        $category = TCategoria::all();
        return view('page.faq', compact('faqs', 'category'));
    }



    public function hotels(){
        $hotels = THotel::all();
        $category = TCategoria::all();
        return view('page.hotels', compact('hotels', 'category'));
    }

    public function responsability(){
        $category = TCategoria::all();
        return view('page.responsability', compact('category'));
    }

    public function reviews(){
        $testinomials = TTestimonio::all();
        $category = TCategoria::all();
        return view('page.reviews', compact('testinomials', 'category'));
    }

    public function tours(){
        $paquetes = TPaquete::where('is_p_t', '0')->get();
        $category = TCategoria::all();

        return view('page.tours',
            compact(
                'paquetes',
                'category'
            ));
    }
    public function blog(){
        $blogs = TPost::latest('id')->get();
        $blogs_first = TPost::latest('id')->first();
        $category = TCategoria::all();
        return view('page.blog', compact('blogs_first','blogs', 'category'));
    }
    public function blog_show(TPost $post){
        $category = TCategoria::all();
        return view('page.blog-show', compact('post', 'category'));
    }
}
