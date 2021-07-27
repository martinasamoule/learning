@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Students/Add new </h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.student.index') }}">
   Back
</a>
      </div>


<form method="post" action="{{ route('admin.student.store') }}">
   
    @csrf 
    @include('admin.inc.errors')
    <div class="form-group">
      <label>Name</label>
         <input type='text' name="name" class="form-control"></input>
        
    
     </div>
     <div class="form-group">
      <label>Email</label>
         <input type='text' name="email" class="form-control"></input>
        
    
     </div>
     <div class="form-group">
      <label>Spec</label>
         <input type='text' name="spec" class="form-control"></input>
        
    
     </div>
     <button type="submit"  class="btn btn-sm btn-primary mt-5" >Submit</button>
</form>



@endsection