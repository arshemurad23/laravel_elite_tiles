<?php

namespace App\Http\Controllers;

use App\Models\Masg;
use Illuminate\Http\Request;

class MasgController extends Controller
{
    //

  function add_masg(Request $request)
{
    $add_masg = new Masg();
    $add_masg->name = $request->input('uname');
    $add_masg->number = $request->input('number');
    $add_masg->masg = $request->input('masg');
    $add_masg->save();

    return redirect()->back()->with('success', 'Message submitted successfully!');
}

      function masg_list(){

        $add_list = Masg::all();
        return view('admin_dashboard.masg-list',['add_list'=>$add_list]);


      }

   function masg_delete($id) {
    Masg::destroy($id);
    return redirect('masg/list')->with('success', 'Message deleted successfully!');
}


}
