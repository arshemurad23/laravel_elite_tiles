<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ContentContorller extends Controller
{
    // Show form with category dropdown
    function categorieselect() {
        $categories = Categorie::all();
        return view('admin_dashboard.contentform', ['categories' => $categories]);
    }

    // Store new content
    function addcontent(Request $request) {
        $folderPath = public_path('uploads/categories');

        // Create folder if it doesn't exist
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        // Handle image uploads
        $panal_img_name = time() . '_panel.' . $request->file('panal_img')->getClientOriginalExtension();
        $request->file('panal_img')->move($folderPath, $panal_img_name);

        $card_img1_name = time() . '_card1.' . $request->file('card_img1')->getClientOriginalExtension();
        $request->file('card_img1')->move($folderPath, $card_img1_name);

        $card_img2_name = time() . '_card2.' . $request->file('card_img2')->getClientOriginalExtension();
        $request->file('card_img2')->move($folderPath, $card_img2_name);

        $card_img3_name = time() . '_card3.' . $request->file('card_img3')->getClientOriginalExtension();
        $request->file('card_img3')->move($folderPath, $card_img3_name);

        // Save to DB
        $content = new Content();
        $content->categorie = $request['categorie'];
        $content->panal_img = 'uploads/categories/' . $panal_img_name;
        $content->panal_text = $request['panal_text'];
        $content->heading = $request['heading'];
        $content->text = $request['text'];
        $content->card_img1 = 'uploads/categories/' . $card_img1_name;
        $content->card_img2 = 'uploads/categories/' . $card_img2_name;
        $content->card_img3 = 'uploads/categories/' . $card_img3_name;
        $content->explore_text = $request['explore_text'];
        $content->save();

        return redirect('content/view')->with('content_added', 'Content added successfully!');
    }

    // View all content
    function contentview() {
        $contentview = Content::all();
        return view('admin_dashboard.contentview', ['contentview' => $contentview]);
    }

    // Edit form
    function content_edit($id) {
        $categories = Categorie::all();
        $content_edit = Content::find($id);
        return view('admin_dashboard.contentedit', [
            'content_edit' => $content_edit,
            'categories' => $categories
        ]);
    }

    // Update content
    function content_update(Request $request, $id) {
        $content = Content::findOrFail($id);

        $content->categorie = $request->categorie;
        $content->panal_text = $request->panal_text;
        $content->heading = $request->heading;
        $content->text = $request->text;
        $content->explore_text = $request->explore_text;

        $folderPath = public_path('uploads/categories');
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        // Panel Image
        if ($request->hasFile('panal_img')) {
            $file = $request->file('panal_img');
            $filename = time() . '_panel.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $filename);
            $content->panal_img = 'uploads/categories/' . $filename;
        }

        // Card Image 1
        if ($request->hasFile('card_img1')) {
            $file = $request->file('card_img1');
            $filename = time() . '_card1.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $filename);
            $content->card_img1 = 'uploads/categories/' . $filename;
        }

        // Card Image 2
        if ($request->hasFile('card_img2')) {
            $file = $request->file('card_img2');
            $filename = time() . '_card2.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $filename);
            $content->card_img2 = 'uploads/categories/' . $filename;
        }

        // Card Image 3
        if ($request->hasFile('card_img3')) {
            $file = $request->file('card_img3');
            $filename = time() . '_card3.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $filename);
            $content->card_img3 = 'uploads/categories/' . $filename;
        }

        $content->save();

        return redirect('content/view')->with('content_updated', 'Content updated successfully!');
    }

    // Delete content
    function content_drop($id) {
        Content::destroy($id);
        return redirect('content/view');
    }
}
