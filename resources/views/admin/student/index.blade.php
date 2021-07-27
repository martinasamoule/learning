@extends('admin.inc.layout')
@section('content')

<div class="container">
    <div class="d-flex justify-content-between mb-3">
    <h6>Students</h6>
    <a class="btn btn-sm btn-primary"  href="{{ route('admin.student.create') }}">
     Add new 
</a>
      </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">spec</th>
      <th scope="col">Actions</th>
      
    </tr>
   cats
  </thead>
  <tbody>
      @foreach($students as $s)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td> @if($s->name !==null)
      {{ $s->name }}
      @else
      not exist
      @endif</td>
      <td>{{ $s->email }}</td>
      <td>
      @if($s->spec !==null)
      {{ $s->spec }}
      @else
      not exist
      @endif
      </td>
      <td>
          <a class="btn btn-sm btn-info"  href="{{ route('admin.student.edit', $s->id) }}">Edit</a>
          <a class="btn btn-sm btn-danger"  href="{{ route('admin.student.delete' ,$s->id) }}">Delete</a>
          <a class="btn btn-sm btn-primary"  href="{{ route('admin.student.showCourses' ,$s->id) }}">Show Courses</a>
      </td>
    </tr>
 @endforeach

  </tbody>
</table>
<div class="d-flex justify-content-center w-100 mb-3">
          {!! $students->render() !!}
         </div> 
</div>
@endsection