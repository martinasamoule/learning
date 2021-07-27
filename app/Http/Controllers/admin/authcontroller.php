<?php

namespace App\Http\Controllers\admin;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
class authcontroller extends Controller
{
    public function login()
    {

     return view('admin.auth.login');
    }
    public function dologin(Request $request)
    {
        $data=$request->validate([
            'email'=>'required|email|max:191', //lw tmm bwkml lw l2 berg3ni lnafs el saf7a tani 
            'password'=>'required|string'
        ]);
    if(! Auth()->attempt([ //guard 3l4an a7na m4 48len 3la el default el web 
            'email'=>$data['email'],
            'password'=>$data['password']
        ])) //function el attempt bt7wl el pass ll hash 2bl ma tkarn 
        {
            return back();
        }
      
        return redirect(route('admin.home'));
    }
    public function logout()
    {
        
            auth()->logout();
           
        return redirect(route('admin.login'));
        
    }
}
