@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Categories/Add new </h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.cat.index') }}">
   Back
</a>
      </div>


<form method="post" action="{{ route('admin.cat.store') }}">
   
    @csrf 
    @include('admin.inc.errors')
    <div class="form-group">
      <label>Name</label>
         <input type='text' name="name" class="form-control"></input>
         <button type="submit"  class="btn btn-sm btn-primary mt-5" >Submit</button>
     </div>
</form>



@endsection