<?php

namespace App\Http\Controllers\Admin;
use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
{
    $data['cats']=Cat::select('id','name')->orderBy('id','DESC')->get();
    return view('admin.cat.index')->with($data);
}


public function create() //add 
{
    return view('admin.cat.create');
}


public function store(Request $request)
{

$data = $request->validate([
'name'=>'required|string|max:191'
]);
Cat::create($data);
return redirect(route('admin.cat.index'));
}



public function edit($id)
{
    $data['cat']=Cat::findOrfail($id);
    return view('admin.cat.edit')->with($data);
}
public function update(Request $request)
{
    
    $data = $request->validate([
      
        'name'=>'required|string|max:191'
        ]);
        Cat::findorfail($request->id)->update($data);
    return redirect(route('admin.cat.index'));
}
public function delete($id)
{
 
        Cat::findorfail($id)->delete();
    return redirect(route('admin.cat.index'));
}

}
