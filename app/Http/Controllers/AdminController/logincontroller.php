<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login_model;
class loginController extends Controller
{
   // Admin Login
   public function admin_login()
   {
       return view('AdminView.login');
   }
 
   public function login_admin(Request $Request)
   {
       $admin_details=array(
        'email'=>$Request->post('email'),
        'password'=>$Request->post('password')
       );
       // creating object of Model
       $loginmodel=new login_model();
       //  Checking user exist or not
        $result_login=$loginmodel->login_check_model($admin_details);
        

       foreach ($result_login as $result) 
       {
            $admin_id=$result->id;
            $admin_name=$result->admin_name;
            $admin_email=$result->email;
       }
 

       $result_data=$result_login->count();
 
       if ($result_data>0) 
       { 
               $Request->session()->put('sess_admin_id',$admin_id);
               $Request->session()->put('sess_admin_email',$admin_email);
               $Request->session()->put('sess_admin_name',$admin_name);
               $Request->session()->put('admin_logged',True);
               return redirect('/admin/dashboard'); 
       }else
       {
             $Request->session()->flash("invalidlogin","success");
             return redirect('/admin');
       }
   }
   public function logout_admin(Request $Request)
    {
        $Request->session()->flush();
        return redirect('/admin');
    }
}

  