<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Tile;
use Illuminate\Http\Request;

class TileController extends Controller
{
   
    function categorieselect(){
       
        $categories = Categorie::all()  ;
         return view('admin_dashboard.tileform' ,['categories'=>$categories]); // Replace with your actual view path
    }



public function tileadd(Request $request)
{
    $tile = new Tile();
    $tile->name = $request->name;
    $tile->categorie = $request->categorie;
    $tile->size = $request->size;
    $tile->finish = $request->finish;
    $tile->usage = $request->usage;
    $tile->material = $request->material;
    $tile->description = $request->description;

    // Handle Image 1 upload
    if ($request->hasFile('img1')) {
        $file1 = $request->file('img1');
        $filename1 = time() . '_1.' . $file1->getClientOriginalExtension();
        $file1->move(public_path('uploads'), $filename1);
        $tile->img1 = 'uploads/' . $filename1;
    }

    // Handle Image 2 upload
    if ($request->hasFile('img2')) {
        $file2 = $request->file('img2');
        $filename2 = time() . '_2.' . $file2->getClientOriginalExtension();
        $file2->move(public_path('uploads'), $filename2);
        $tile->img2 = 'uploads/' . $filename2;
    }

    $tile->save(); // ✅ Save to DB

    return redirect('tile/list')->with('tileadded', 'Tile added successfully!');
}



function tilelist(){

       $tile = tile::all()  ;

    return view('admin_dashboard.tiles',['tiles'=>$tile]);
}


function tileedit($id){
    
        $categories = Categorie::all()  ;
    $tile_edit = tile::find($id);
    
    return view('admin_dashboard.tileedit',['tile_edit'=>$tile_edit , 'categories'=>$categories]);

}


function tileupdate(Request $request , $id){

  $tile = Tile::findOrFail($id);

    // Update fields
    $tile->name = $request->name;
    $tile->size = $request->size;
    $tile->finish = $request->finish;
    $tile->usage = $request->usage;
    $tile->material = $request->material;
    $tile->description = $request->description;

    // Handle Image 1 (if provided)
    if ($request->hasFile('img1')) {
        $image1 = $request->file('img1');
        $img1Name = time() . '_1.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('uploads/tiles'), $img1Name);
        $tile->img1 = 'uploads/tiles/' . $img1Name;
    }

    if(!empty($request->categorie)){
    $tile->categorie = $request->categorie;

    }



    // Handle Image 2 (if provided)
    if ($request->hasFile('img2')) {
        $image2 = $request->file('img2');
        $img2Name = time() . '_2.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('uploads/tiles'), $img2Name);
        $tile->img2 = 'uploads/tiles/' . $img2Name;
    }

    // Save the updated tile
    $tile->save();

    return redirect('tile/list')->with('tileupdate', 'Tile updated successfully!');
}


function tiledelete($id){

    $tiledelete = tile::destroy($id);

    return redirect('tile/list');
}




}
