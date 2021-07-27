@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Trainers/Edit /{{ $trainer->name }} </h6>
    <a class="btn btn-sm btn-primary" href=" {{ route('admin.trainer.index') }}">
     Back
</a>
      </div>

      @include('admin.inc.errors')
<form method="post " action="{{ route('admin.trainer.update') }}" enctype="multipart/form-data" >
   
    @csrf 
   
    <input type="hidden" name="id" value="{{ $trainer->id }}"></input>
    <div class="form-group">
      <label>Name</label>
         <input type='text' name="name" class="form-control" value=" {{ $trainer->name }} " value="{{ $trainer->name }}"></input>
     </div>
     <div>
     <label>phone</label>
         <input type='text' name="phone" class="form-control" value="{{ $trainer->phone }}"></input>
        
     </div>
     <div class="form-group">
      <label>spec</label>
         <input type='text' name="spec" class="form-control" value="{{ $trainer->spec }}"></input>
    
     </div>
     <div>
     <img src="{{ asset('uploads/trainers/' . $trainer->img)}}" height="100px" alt="">
     </div>
     <div class="form-group">
     <label>img</label>
         <input type='file' name="img" class="form-control-file"></input>
        
     </div>
     <button type="submit"  class="btn btn-sm btn-primary mt-5" >Submit</button>
</form>



@endsection