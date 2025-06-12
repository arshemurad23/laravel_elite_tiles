<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicecontent;


class ServicecontentController extends Controller
{
    //
    function service_content_list(){

        $service_content_list =  Servicecontent::find(1);
        return view('admin_dashboard.service_content',['content'=>$service_content_list]);

    }

    function service_content_edit($id){

     $service_content_edit =  Servicecontent::find($id);
        return view('admin_dashboard.service_content_edit',['service_content_edit'=>$service_content_edit]);

    }


    public function service_content_update(Request $request, $id)
{
    $content = ServiceContent::findOrFail($id);

    // Update the text field
    $content->info = $request->footer_text;

// Define common upload path
$uploadPath = public_path('uploads/Service_content');

// Create directory if it doesn't exist
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// Panel Image
if ($request->hasFile('panal_img')) {
    $file = $request->file('panal_img');
    $filename = time() . '_panel.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $filename);
    $content->panal_img = 'uploads/Service_content/' . $filename;
}

// Card Image 1
if ($request->hasFile('card_img1')) {
    $file = $request->file('card_img1');
    $filename = time() . '_card1.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $filename);
    $content->card_1 = 'uploads/Service_content/' . $filename;
}

// Card Image 2
if ($request->hasFile('card_img2')) {
    $file = $request->file('card_img2');
    $filename = time() . '_card2.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $filename);
    $content->card_2 = 'uploads/Service_content/' . $filename;
}

// Card Image 3
if ($request->hasFile('card_img3')) {
    $file = $request->file('card_img3');
    $filename = time() . '_card3.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $filename);
    $content->card_3 = 'uploads/Service_content/' . $filename;
}


    // Save the updated content
    $content->save();

    return redirect('service/content')->with('service_content_updated', 'Service content updated successfully.');
}
}
