<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    
    function categorie(){
       
        $categories = Categorie::all()  ;
         return view('admin_dashboard.categorie' ,['categorie'=>$categories]); // Replace with your actual view path

    }


    function categorieadd(Request $request){

           $request->validate([
    'categorie' => 'required'
]);

    $categorieadd = new Categorie();
    $categorieadd->categories=$request->categorie;
    
    if($categorieadd->save()){

         return redirect('categorie'); 
    }

    }

       

         function categorieedit($id) {
    $categorieedit = Categorie::find($id);
    return view('admin_dashboard.categorieedit', ['categorieedit' => $categorieedit]);
  }

  




      function categorieupdate(Request $request , $id){

        $categorieupdate = Categorie::find($id);

        $categorieupdate->categories=$request->categorie;

        if($categorieupdate->save()){
              return redirect('categorie'); 
        }


  }
 





    function categoriedrop($id){
            $deleted = Categorie::destroy($id);
     return redirect('categorie'); 

    }


}
