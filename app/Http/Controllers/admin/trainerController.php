<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Trainer;
use Image;
class trainerController extends Controller
{
    public function index()
{
    $data['trainers']=Trainer::select('id','name','phone','spec','img')->orderBy('id','DESC')->get();
    return view('admin.trainer.index')->with($data);
}


public function create() //add 
{
    return view('admin.trainer.create');
}


public function store(Request $request)
{

$data = $request->validate([
'name'=>'required|string|max:191',
'phone'=>'nullable|string|max:191',
'spec'=>'required|string|max:191',
'img'=>'required|image|mimes:jpg,jpeg,png',
]);

$new_name =$data['img']->hashName();////b8er asmha 3l4an mmkn kza 7d y3mlha bnfs el asm 
Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/' .$new_name ));         //make di bt3mli instance mn el image 3l4an 23rf at3aml m3ah 
$data['img']=$new_name; 
Trainer::create($data);
return redirect(route('admin.trainer.index'));
}



public function edit($id)
{
    $data['trainer']=Trainer::findOrfail($id);
    return view('admin.trainer.edit')->with($data);
}
public function update(Request $request)
{
    
    $data= $request->validate([
       
        
                 'name'=>'required|string|max:191',
                 'phone'=>'nullable|string|max:191',
                 'spec'=>'required|string|max:191',
                 'img'=>'nullable|image|mimes:jpg,jpeg,png',
            ]);
            $old_name=Trainer::findorfail($request->id)->img;
            $data['id']=$request->id;
            if($request->hasFile('img'))
            {
             Storage::disk('uploads')->delete('trainers/' . $old_name);  ////////////use class storge fi el uploads
           
              $new_name =$data['img']->hashName();////b8er asmha 3l4an mmkn kza 7d y3mlha bnfs el asm 
              Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/' .$new_name ));         //make di bt3mli instance mn el image 3l4an 23rf at3aml m3ah 
              $data['img']=$new_name; 
            }
            else{
  
            $data['img']= $old_name;
              }
        Trainer::findorfail($request->id)->update($data);
  //      $data['trainer']=Trainer::findOrfail($request->id);
  //  return redirect(route('admin.trainer.index'));
//  return view('admin.trainer.edit')->with($data);
return redirect(route('admin.trainer.index'));
}
public function delete($id)
{
    $old_name=Trainer::findorfail($id)->img;
    Storage::disk('uploads')->delete('trainers/' . $old_name);
    Trainer::findorfail($id)->delete();
    return redirect(route('admin.trainer.index'));
}
}
