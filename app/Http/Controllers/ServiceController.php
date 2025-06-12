<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //

    function service_list(){

      $service_list =  Service::all();
      return view('admin_dashboard.service_list',['service_list'=>$service_list]);

    }

    function service_add(Request $request){

        $service_add = new Service();
        
        $service_add->name = $request->name;
        $service_add->number = $request->number;
        $service_add->info = $request->info;

        $service_add->save();

        return  redirect('service/list')->with('service_added','Service added successfully');


    }

  function service_edit($id){

   $service_edit = Service::find($id);

      return view('admin_dashboard.service_edit',['service_edit'=>$service_edit]);

    }


    function service_update(Request $request , $id){

      $service_update = Service::find($id);

        $service_update->name = $request->name;
        $service_update->number = $request->number;
        $service_update->info = $request->info;

        $service_update->save();

         return  redirect('service/list')->with('service_updated','Service Updated successfully');



    }




    function service_delete($id){

   $service_delete = Service::destroy($id);

      return redirect('service/list')->with('service_deleted', 'Service Deleted successfully');


    }
 }
