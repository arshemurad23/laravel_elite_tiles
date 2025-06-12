<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Tile;
use App\Models\Content;
use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Servicecontent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function __construct()
    {
        $categories = Categorie::all();
        $contact_list = Contact::find(1);
        $service_list = Service::all();

        // Share data with all views
        View::share([
            'categories' => $categories,
            'contact_list' => $contact_list,
            'service_list' => $service_list
        ]);
    }

    function home() {
        $floor_tiles = Tile::where('categorie', 'Floor Tiles')->get();
        $washroom_tiles = Tile::where('categorie', 'Washroom Tiles')->get();
        $kitchen_tiles = Tile::where('categorie', 'Kitchen Tiles')->get();

        $categorie_count = Categorie::count();

        $about = About::find(1);


        $service_count = Service::count();


        return view('index', [
            'categorie_count' => $categorie_count,
            'washroom_tiles' => $washroom_tiles,
            'kitchen_tiles' => $kitchen_tiles,
            'floor_tiles' => $floor_tiles,
            'about' => $about,
            'service_count' =>$service_count         
        ]);
    }

    function categorie($categorie) {
        $content = Content::where('categorie', $categorie)->first();
        $tiles = Tile::where('categorie', $categorie)->get();

        return view('user_categorie', [
            'content' => $content,
            'tiles' => $tiles
        ]);
    }

    function tile_info($name) {
        $tiles_info = Tile::where('name', $name)->first();

        return view('tile_info', [
            'tiles_info' => $tiles_info
        ]);
    }

    function rooms_Tiles() {
        $content = Content::where('categorie', 'Floor Tiles')->first();
        $tiles = Tile::where('categorie', 'Floor Tiles')->get();

        return view('user_categorie', [
            'content' => $content,
            'tiles' => $tiles
        ]);
    }

    function Washroom_Tiles() {
        $content = Content::where('categorie', 'Washroom Tiles')->first();
        $tiles = Tile::where('categorie', 'Washroom Tiles')->get();

        return view('user_categorie', [
            'content' => $content,
            'tiles' => $tiles
        ]);
    }

    function Kitchen_Tiles() {
        $content = Content::where('categorie', 'Kitchen Tiles')->first();
        $tiles = Tile::where('categorie', 'Kitchen Tiles')->get();

        return view('user_categorie', [
            'content' => $content,
            'tiles' => $tiles
        ]);
    }

    function about() {
        $about = About::find(1);

        
            $service_count = Service::count();

        $categorie_count = Categorie::count();

        return view('about', [
            'about' => $about,
            'categorie_count' => $categorie_count,
            'service_count' =>$service_count

        ]);
    }

    function service() {

        
         $service_content =  Servicecontent::find(1);
      
         return view('service',[

            'service_content'=>$service_content 

         ]);
    }

    function contact() {
        return view('contact');
    }
}
