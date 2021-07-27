@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Trainerss/Add new </h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.trainer.index') }}">
   Back
</a>
      </div>


<form method="post" action="{{ route('admin.trainer.store') }}" enctype="multipart/form-data">  <!-- lma yn2a feh raf3 sora lazm adeh el enctype -->
   
    @csrf 
    @include('admin.inc.errors')
    <div class="form-group">
      <label>Name</label>
         <input type='text' name="name" class="form-control"></input>
        
     </div>
     <div class="form-group">
      <label>phone</label>
         <input type='text' name="phone" class="form-control"></input>
        
     </div>
     <div class="form-group">
      <label>spec</label>
         <input type='text' name="spec" class="form-control"></input>
    
     </div>
     <div class="form-group">
      <label>img</label>
         <input type='file' name="img" class="form-control-file"></input>
        
     </div>
     <button type="submit"  class="btn btn-sm btn-primary mt-5" >Submit</button>
</form>



@endsection