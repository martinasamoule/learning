<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Course;
class coursecontroller extends Controller
{
  public function cat ($id)
  {
   $data['cat']= Cat::findOrfail($id);
   $data['courses']=Course::where('cat_id',$id)->paginate(3);
   return view('front.courses.cat')->with($data);
   
  }
  public function show($id,$c_id)
  {

  //  $data['courses']=Course::where('id',$c_id)->first;
  $data['courses']=Course::findOrfail($c_id); ////primary key return 404 if error make 
    return view ('front.courses.show')->with($data);
  }
}
