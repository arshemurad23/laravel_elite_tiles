<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContentContorller;
use App\Http\Controllers\TileController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\MasgController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicecontentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned
| to the "web" middleware group.
|--------------------------------------------------------------------------
*/

// Public Routes

Route::get('/', [UserController::class, 'home']);



Route::get('home/categorie/{categorie}', [UserController::class, 'categorie']);
Route::get('home/categorie/{name}/info', [UserController::class, 'tile_info']);
Route::get('categorie-rooms-Tiles', [UserController::class, 'rooms_Tiles']);
Route::get('categorie-Washroom-Tiles', [UserController::class, 'Washroom_Tiles']);
Route::get('categorie-Kitchen-Tiles', [UserController::class, 'Kitchen_Tiles']);



Route::get('home/about', [UserController::class, 'about']);
Route::get('home/service', [UserController::class, 'service']);
Route::get('home/contact', [UserController::class, 'contact']);




// Admin Authentication Routes
Route::view('admin-panal', 'admin_dashboard.admin_login');
Route::post('login', [Logincontroller::class, 'login']);
Route::get('logout', [Logincontroller::class, 'logout']);
Route::view('change_password', 'admin_dashboard.change_password');
Route::post('change_password', [Logincontroller::class, 'change_password']);



// Routes Protected by adminauth Middleware
   Route::middleware(['adminauth'])->group(function () {


    // Dashboard
    Route::get('dashboard', [Logincontroller::class, 'count']);


    // Categories
     Route::get('categorie', [CategorieController::class, 'categorie']);
     Route::post('categorie/add', [CategorieController::class, 'categorieadd']);


      // Tiles
    Route::get('tile/form', [TileController::class, 'categorieselect']);
    Route::get('tile/list', [TileController::class, 'tilelist']);


    // Content
    Route::get('content/view', [ContentContorller::class, 'contentview']);
    Route::get('content/form', [ContentContorller::class, 'categorieselect']);
 

     // Leads
    Route::get('leads', [LeadController::class, 'lead_list']);

    
     // Messages
    Route::get('masg/list', [MasgController::class, 'masg_list']);

    
     // About
    Route::get('about-content/view', [AboutController::class, 'about_list']);
     

     // Contact
    Route::get('contact-content/view', [ContactController::class, 'contact_list']);


});


    // Categories   
    Route::post('categorie/update/{id}', [CategorieController::class, 'categorieupdate']);
    Route::get('categorie/drop/{id}', [CategorieController::class, 'categoriedrop']);
    Route::get('categorie/edit/{id}', [CategorieController::class, 'categorieedit']);


    // Tiles
    Route::post('tile-add', [TileController::class, 'tileadd']);
    Route::post('tile-update/{id}', [TileController::class, 'tileupdate']);
    Route::get('tile-delete/{id}', [TileController::class, 'tiledelete']);
    Route::get('tile-edit/{id}', [TileController::class, 'tileedit']);


    // Content
    Route::post('add/content', [ContentContorller::class, 'addcontent']);
    Route::post('content/update/{id}', [ContentContorller::class, 'content_update']);
    Route::get('content/edit/{id}', [ContentContorller::class, 'content_edit']);
    Route::get('content/drop/{id}', [ContentContorller::class, 'content_drop']);


    // Leads
    Route::post('leads-add', [LeadController::class, 'lead_add']);
    Route::get('lead-delete/{id}', [LeadController::class, 'lead_delete']);


     // Messages
    Route::post('add/masg', [MasgController::class, 'add_masg']);
    Route::get('delete-masg/{id}', [MasgController::class, 'masg_delete']);



   


    // about
    Route::get('about-content/edit/{id}', [AboutController::class, 'about_edit']);
    Route::post(' about-update/{id}', [AboutController::class, 'about_update']);


     
     
    // Contact
    Route::get('contact-content/edit/{id}', [ContactController::class, 'contact_edit']);
    Route::post(' contact-update/{id}', [ContactController::class, 'contact_update']);



  //  Service


    Route::get('service/list', [ServiceController::class, 'service_list']);
    Route::view('service/add', 'admin_dashboard.add_service');
    Route::post('service/add/form', [ServiceController::class, 'service_add']);


    Route::get('service/delete/{id}', [ServiceController::class, 'service_delete']);
    Route::get('service/edit/{id}', [ServiceController::class, 'service_edit']);
   
    Route::post('service/update/{id}', [ServiceController::class, 'service_update']);
    


  //  Service Content

    Route::get('service/content', [ServicecontentController::class, 'service_content_list']);
    Route::get('service-content/edit/{id}', [ServicecontentController::class, 'service_content_edit']);
    Route::post('service-content/update/{id}', [ServicecontentController::class, 'service_content_update']);


    