<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use App\Models\Categorie;
use App\Models\Tile;

use App\Models\Masg;
use  App\Models\lead;
use App\Models\Service;
use App\Models\Contact;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Logincontroller extends Controller
{


    function count(){


        $tile_count = Tile::count();

         $masg_count = Masg::count();
          $lead_count = lead::count();
           $service_count = Service::count();



        $categorie_count = Categorie::count();
        return view('admin_dashboard.dashboard',[
    
            'tilescount'=>$tile_count,
        'categorie_count'=>$categorie_count,

        'masg_count'=>$masg_count,
        'lead_count'=>$lead_count,
        'service_count'=>$service_count
    
    ]);

    }




                                            // function login
     function login(Request $request){
        $request->validate([
    'username' => 'required',
    'password' => 'required',
]);
        $username = $request->input('username');
        $password = $request->input('password');
        // Find user by username
        $admin = AdminLogin::where('user_name', $username)->first();
        if($admin == true){
            if ($admin->passwod == $password){
              session(['admin' => $admin]);
                return redirect('dashboard');                
        } 
        else {
            return redirect()->back()->with('wrongpassword', 'Invalid password');
        }
        }else{
            return redirect()->back()->with('wrongusername', 'Invalid  username');
        }    
    }




                            // function logout 

       function logout()
    {
        session()->pull('admin');
        return redirect('admin-panal'); // redirect instead of view
    }


   
   
   
   
                                                //    function change_password
    function change_password(Request $request){
        
             $request->validate([
    'username' => 'required',
    'key' => 'required',
    'new_password' => 'required',
    'confirm_password' => 'required',
]);

        $username = $request->input('username');
        $key = $request->input('key');
        $new_password = $request->input('new_password');
        $confirm_password = $request->input('confirm_password');
        // Find user by username
       
        if($new_password == $confirm_password){
       
        $admin = AdminLogin::where('user_name', $username)->first();
          
        if($admin == true){

            if ($admin->password_key == $key){

                $admin->passwod=$new_password;
                
                if($admin->save()){

               session(['admin' => $admin]);
              return redirect('dashboard')->with('success', 'Password changed successfully');                

                }

            } 
          
            else {
            return redirect()->back()->with('key', 'Wrong Key');
        }
        }else{
            return redirect()->back()->with('wrongusername', 'Invalid  username');
        }        

    }else{
        return redirect()->back()->with('c_n_pass', 'New Password & Confirm Password are Not match');
    }

    }



}