<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    function contact_list(){

        $contact_list = Contact::all();
        return view('admin_dashboard.contact_view',['contact_list'=>$contact_list]);

    }

    function contact_edit($id){

        $contact_edit = Contact::find(1);
        return view('admin_dashboard.contact_edit',['contact_edit'=>$contact_edit]);

    }


    function contact_update(Request $request, $id){

    $contact = Contact::findOrFail($id);

    // Update basic fields
    $contact->address = $request->address;
    $contact->email = $request->email;
    $contact->shop_number = $request->shop_number;
    $contact->phone_number = $request->phone_number;
    $contact->web_name = $request->web_name;
    $contact->definition = $request->definition;
    $contact->footer_text = $request->footer_text;

   // Check if a new image is uploaded
if ($request->hasFile('panal_img')) {

    // Delete old image if it exists
    if (!empty($contact->panal_img) && File::exists(public_path($contact->panal_img))) {
        File::delete(public_path($contact->panal_img));
    }

    // Store new image
    $file = $request->file('panal_img');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('upload/contact'), $filename);

    // Save image path to DB
    $contact->panal_img = 'upload/contact/' . $filename;
}


    $contact->save();

    return redirect('contact-content/view')->with('contact_edit', 'Contact updated successfully.');
}

}
