@extends('admin.inc.layout')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Students/show Courses</h6>
    <a class="btn btn-sm btn-primary" href="{{ route('admin.student.index') }}">
   Back
</a>
      </div>
      <div>
      <table class="table">
  <thead>
    <tr>
    
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">status</th>
      <th scope="col">Actions</th>
      
    </tr>
   cats
  </thead>
  <tbody>
  
   @foreach($courses as $course)
     <tr>
     <td> {{ $loop->iteration }} </td>
     
     <td>{{ $course->name }}</td>

     <td>{{ $course->pivot->status }}</td>

     <td>
     @if($course->pivot->status =='pending' || $course->pivot->status =='reject')
          <a class="btn btn-sm btn-info"  href="{{ route('admin.student.approveCourse', [$student_id,$course->id]) }}">Approve</a>
         
      @endif   
      @if($course->pivot->status =='pending' || $course->pivot->status =='approve')
          <a class="btn btn-sm btn-danger"  href="{{ route('admin.student.rejectCourse' ,[$student_id,$course->id]) }}">Reject</a>
          @endif
      </td>
     </tr>
      


      @endforeach
  </tbody>
  </table>
     
     
      </div>
@endsection