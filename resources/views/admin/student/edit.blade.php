@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Categories/Edit /{{ $student->name }} </h6>
    <a class="btn btn-sm btn-primary" href=" {{ route('admin.student.index') }}">
     Back
</a>
      </div>


<form method="post " action="{{ route('admin.student.update') }}">
   
    @csrf 
    @include('admin.inc.errors')
    <input type="hidden" name="id" value="{{ $student->id }}"></input>
    <div class="form-group">
      <label>Name</label>
         <input type='text' name="name" class="form-control" value=" {{ $student->name }} "></input>
     </div>
     <div class="form-group">
      <label>Email</label>
         <input type='text' name="email" class="form-control" value=" {{ $student->email }} "></input>
     </div>
     <div class="form-group">
      <label>Spec</label>
         <input type='text' name="spec" class="form-control" value=" {{ $student->spec }} "></input>
     </div>
     <button class="btn btn-sm btn-primary" type="submit">
     Submit
    </button>
</form>



@endsection