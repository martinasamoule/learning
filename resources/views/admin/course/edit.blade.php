@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>courses/Edit /{{ $course->name }} </h6>
    <a class="btn btn-sm btn-primary" href=" {{ route('admin.course.index') }}">
     Back
</a>
      </div>

   
      <form method="get" action="{{ route('admin.course.update') }}" enctype="multipart/form-data">  <!-- lma yn2a feh raf3 sora lazm adeh el enctype -->
   
   @csrf 
   @include('admin.inc.errors')
   <input type="hidden" name="id" value="{{ $course->id }}"></input>
   <div class="form-group">
     <label>Name</label>
        <input type='text' value="{{ $course->name }}" name="name" class="form-control"></input>
       
    </div>

    <div class="form-group">
     <label>Cat</label>
       <select class="form-control" name="cat_id" > 
       @foreach($cats as $cat)
       <option value="{{ $cat->id }}"> {{ $cat->name  }} </option>
       @endforeach
      
       </select>
       
    </div>
    <div class="form-group">
     <label>Trainer</label>
       <select class="form-control" name="trainer_id" > 
       @foreach($trainers as $t)
       <option value="{{ $t->id }}"> {{ $t->name  }} </option>
       @endforeach
       
       </select>
       
    </div>
    <div class="form-group">
     <label>Small_desc</label>
        <input type='text' name="small_desc" class="form-control" value="{{ $course->small_desc }}"></input>
       
    </div>
    <div class="form-group">
     <label>Desc</label>
      <textarea name="desc" class="form-control" cols="30" rows="10">{{ $course->desc }}</textarea>
   
    </div>
    <div class="form-group">
     <label>Price</label>
        <input type='text' name="price" class="form-control" value="{{ $course->price }}"></input>
       
    </div>
    <div class="form-group">
     <label>img</label>
     <div>
     <img src="{{ asset('uploads/courses/' . $course->img)}}" height="100px" alt="">
     </div>
        <input type='file' name="img" class="form-control-file"></input>
    </div>
    <button type="submit"  class="btn btn-sm btn-primary mt-5" >Submit</button>
</form>



@endsection