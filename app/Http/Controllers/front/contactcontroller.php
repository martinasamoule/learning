<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class contactcontroller extends Controller
{
   
    public function index()
    {
        $data['sett']=Setting::first();
        
        return view('front/contact/index')->with($data);
    }
   
}
