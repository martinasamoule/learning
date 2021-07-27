@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Categories/Edit /{{ $cat->name }} </h6>
    <a class="btn btn-sm btn-primary" href=" {{ route('admin.cat.index') }}">
     Back
</a>
      </div>


<form method="post " action="{{ route('admin.cat.update') }}">
   
    @csrf 
    @include('admin.inc.errors')
    <input type="hidden" name="id" value="{{ $cat->id }}"></input>
    <div class="form-group">
      <label>Name</label>
         <input type='text' name="name" class="form-control" value=" {{ $cat->name }} "></input>
     </div>
     <button class="btn btn-sm btn-primary" type="submit">
     Submit
    </button>
</form>



@endsection