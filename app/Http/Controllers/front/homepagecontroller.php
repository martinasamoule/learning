<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Trainer;
use App\Student;
use App\Test;
use App\SiteContent;
class homepagecontroller extends Controller
{
    public function index()
    {
      $data['banner']=SiteContent::first();
        $data['courses']=Course::select('id','name','small_desc','cat_id','trainer_id','price','img')
        ->orderBy('id','desc')
        ->take(3)
        ->get();
        $data['courses_counter']=Course::count();
        $data['trainers_counter']=Trainer::count();
        $data['students_counter']=Student::count();
      //  dd($data['courses']);
        $data['tests']=Test::select('id','name','spec','desc','img')
        ->get();
       
        return view('front/index')->with($data);
    }
}
