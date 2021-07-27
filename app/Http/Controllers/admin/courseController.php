<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Course;
use App\Cat;
use App\Trainer;
use Image;
class courseController extends Controller
{
    public function index()
    {
        $data['courses']=Course::select('id','name','price','img')->orderBy('id','DESC')->paginate(8);
        return view('admin.course.index')->with($data);
    }
    
    public function seemore($id)
    {
        $data['courses']=Course::select('id','small_desc','desc')->where('id',$id)->orderBy('id','DESC')->paginate(8);
        return view('admin.course.seemore')->with($data);
    }
    public function create() //add 
    {
     //   $data['courses']=Course::select('id')->get();
        $data['cats']=Cat::select('id','name')->get();
        $data['trainers']=Trainer::select('id','name')->get();
        return view('admin.course.create')->with($data);
    }
    
    
    public function store(Request $request)
    {
    
    $data = $request->validate([
        'name'=>'required|string|max:191',
        'small_desc'=>'required|string|max:191',
        'desc'=>'required|string',
        'price'=>'required|integer',
        'cat_id'=>'required|exists:cats,id',
        'trainer_id'=>'required|exists:trainers,id',
        'img'=>'required|image|mimes:jpg,jpeg,png',
    ]);
    
    $new_name =$data['img']->hashName();////b8er asmha 3l4an mmkn kza 7d y3mlha bnfs el asm 
    Image::make($data['img'])->resize(701,524)->save(public_path('uploads/courses/' .$new_name ));         //make di bt3mli instance mn el image 3l4an 23rf at3aml m3ah 
    $data['img']=$new_name; 
    Course::create($data);
    return redirect(route('admin.course.index'));
    }
    
    
    
    public function edit($id)
    {
       
        $data['cats']=Cat::select('id','name')->get();
        $data['trainers']=Trainer::select('id','name')->get();
        $data['course']=Course::findOrfail($id);
        return view('admin.course.edit')->with($data);
    }
    public function update(Request $request)
    {
        
        $data= $request->validate([
           
            
            'name'=>'required|string|max:191',
            'small_desc'=>'required|string|max:191',
            'desc'=>'required|string',
            'price'=>'required|integer',
            'cat_id'=>'required|exists:cats,id',
            'trainer_id'=>'required|exists:trainers,id',
            'img'=>'nullable|image|mimes:jpg,jpeg,png',
           
           
                ]);
                $old_name=Course::findorfail($request->id)->img;
                $data['id']=$request->id;
                if($request->hasFile('img'))
                {
                 Storage::disk('uploads')->delete('courses/' . $old_name);  ////////////use class storge fi el uploads
               
                  $new_name =$data['img']->hashName();////b8er asmha 3l4an mmkn kza 7d y3mlha bnfs el asm 
                  Image::make($data['img'])->resize(701,524)->save(public_path('uploads/courses/' .$new_name ));         //make di bt3mli instance mn el image 3l4an 23rf at3aml m3ah 
                  $data['img']=$new_name; 
                }
                else{
      
                $data['img']= $old_name;
                  }
            Course::findorfail($request->id)->update($data);
      //      $data['course']=Course::findOrfail($request->id);
      //  return redirect(route('admin.course.index'));
    //  return view('admin.course.edit')->with($data);
            return back();
    }
    public function delete($id)
    {
        $old_name=Course::findorfail($id)->img;
        Storage::disk('uploads')->delete('courses/' . $old_name);
        Course::findorfail($id)->delete();
        return redirect(route('admin.course.index'));
    }
}
