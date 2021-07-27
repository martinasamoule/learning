<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Course;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    public function index()
{
    $data['students']=Student::select('id','name','email','spec')->orderBy('id','DESC')->paginate(8);
    return view('admin.student.index')->with($data);
}


public function create() //add 
{
    return view('admin.student.create');
}


public function store(Request $request)
{

$data = $request->validate([
'name'=>'nullable|string|max:191',
'email'=>'required|email|unique:students',
'spec'=>'nullable|string|max:191',
]);
Student::create($data);
return redirect(route('admin.student.index'));
}
public function edit($id)
{
    $data['student']=Student::findOrfail($id);
    return view('admin.student.edit')->with($data);
}
public function update(Request $request)
{
    
    $data = $request->validate([
      
       
        'name'=>'nullable|string|max:191',
        'email'=>'required|email|max:191',
        'spec'=>'nullable|string|max:191',
        ]);
        Student::findorfail($request->id)->update($data);
    return redirect(route('admin.student.index'));
}
public function delete($id)
{
 
        Student::findorfail($id)->delete();
    return redirect(route('admin.student.index'));
}

public function showCourses($id)
{

  $data['courses']=Student::findOrfail($id)->courses;
  $data['student_id']=$id;
  //$data['courses']=Course::select('id','name')->where('id',$id)->get();
  return view('admin.student.showCourses')->with($data);
}
public function approveCourse($id,$c_id)
{
  
    DB::table('course_student')->where('student_id',$id)->where('course_id',$c_id)->update(
        [
            'status'=>'approve'
        ]
        );
  
  return back();
}
public function rejectCourse($id,$c_id)
{
  
    DB::table('course_student')->where('student_id',$id)->where('course_id',$c_id)->update(
        [
            'status'=>'reject'
        ]
        );
  
  return back();
}


}
