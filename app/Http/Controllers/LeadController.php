<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\lead;

class LeadController extends Controller
{
    //
   function lead_add(Request $request)
{
    $lead = new Lead();

    $lead->tile_id      = $request->input('tile_id');
    $lead->tile_name    = $request->input('tile_name');
    $lead->categorie    = $request->input('categorie');
    $lead->user_name    = $request->input('fullName');
    $lead->quantity     = $request->input('quantity');
    $lead->phone_number = $request->input('phoneNumber');
    $lead->masg         = $request->input('message');  // 'masg' per spelling confirm kar lein

    $lead->save();

    return redirect()->back()->with('addLead', 'Request submitted successfully!');
}


     function lead_list(){

        $lead_list = lead::all();
        return view('admin_dashboard.lead_list',['lead_list'=>$lead_list]);

     }

     function lead_delete($id){
        $lead_delete = lead::destroy($id);
          return redirect('leads');

     }


}
