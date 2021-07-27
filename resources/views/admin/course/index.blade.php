@extends('admin.inc.layout')
@section('content')

<div class="container">
    <div class="d-flex justify-content-between mb-3">
    <h6>Coursess</h6>
    <a class="btn btn-sm btn-primary"  href="{{ route('admin.course.create') }}">
     Add new 
</a>
      </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
    
      
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($courses as $c)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td>
      <img src="{{ asset('uploads/courses/' . $c->img ) }}" height="50px" alt="no">
      </td>
      <td>{{ $c->name }}</td>
    
      <td>{{ $c->price }} $</td>
     
      <td>
          <a class="btn btn-sm btn-info"  href="{{ route('admin.course.edit', $c->id) }}">Edit</a>
          <a class="btn btn-sm btn-danger"  href="{{ route('admin.course.delete' ,$c->id) }}">Delete</a>
          <a class="btn btn-sm btn-primary"  href="{{ route('admin.course.seemore' ,$c->id) }}">See More Information</a>
      </td>
    </tr>
 @endforeach
 
  </tbody>
</table>
<div class="d-flex justify-content-center w-100 mb-3">
          {!! $courses->render() !!}
         </div> 
</div>
@endsection