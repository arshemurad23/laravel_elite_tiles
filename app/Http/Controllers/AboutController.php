<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //

    function about_list(){
        $about_list = About::all();
        
        return view('admin_dashboard.about_view',['about_list'=>$about_list]);

    }

     function about_edit($id){
        
        $about_edit = About::find($id);
        return view('admin_dashboard.about_edit',['about_edit'=>$about_edit]);

     }



function about_update(Request $request, $id)
{
    $about = About::findOrFail($id);

    // Update basic text fields
  
    $about->heading = $request->heading;
    $about->text_1 = $request->text_1;
    $about->text_2 = $request->text_2;
    $about->happy_customer = $request->happy_customer;
    $about->dealership = $request->dealership;
    $about->total_members = $request->total_members;

    // Handle panel image upload
    if ($request->hasFile('panal_img')) {
        $file = $request->file('panal_img');
        $filename = time() . '_panel_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/about'), $filename);
        $about->panal_img = 'uploads/about/' . $filename;
    }

    // Handle card image upload
    if ($request->hasFile('card_img')) {
        $file = $request->file('card_img');
        $filename = time() . '_card_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/about'), $filename);
        $about->card_img = 'uploads/about/' . $filename;
    }

    $about->save();

    return redirect('about-content/view')->with('about_content', 'Content updated successfully!');
}


}
