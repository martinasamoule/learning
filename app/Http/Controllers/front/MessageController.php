<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Message;
use App\Student;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
    public function newsletter(Request $request)
    {
        $data=$request->validate([
            'email'=>'required|email' //lw tmm bwkml lw l2 berg3ni lnafs el saf7a tani 
        ]);
         
        Newsletter::create($data);
    return back();
    }

    public function contact(Request $request)
    {
        $data=$request->validate([
              'name'=>'required|string|max:191',
              'email'=>'required|email',
              'subject'=>'nullable|string|max:191',
              'message'=>'required|string'

        ]);
         
        Message::create($data);
      return back();
    }
    public function enroll(Request $request)
    {
         $data=$request->validate([
           
              'name'=>'nullable|string|max:191',
              'email'=>'required|email',
              'spec'=>'nullable|string|max:191',
              'course_id'=>'required|exists:courses,id',

        ]);
        $Oldstudent=Student::select('id')->where('email',$data['email'])->first();
        if($Oldstudent==null)
        {
        $student=Student::create( //object student feh kol el data bta3t el object
        
        [
            'name'=>$data['name'],
            'email'=>$data['email'],
            'spec'=>$data['spec'],
        ]
        );
        $student_id=$student->id;
        }
        else{


            $student_id= $Oldstudent->id;

            if($data['name']!==null)
            {
               $Oldstudent->update(['name'=>$data['name']]);


            }
            if($data['spec']!==null)
            {
               $Oldstudent->update(['spec'=>$data['spec']]);

            }
        }
        
        Db::table('course_student')->insert(

            [
                'course_id'=>$data['course_id'],
                'student_id'=>$student_id,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );  
      

      return back();
    }
}