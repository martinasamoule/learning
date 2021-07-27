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
      <th scope="col">Small Desc</th>
      <th scope="col">Desc</th>
    
    
      
    </tr>
  </thead>
  <tbody>
      @foreach($courses as $c)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
     
      <td>{{ $c->small_desc }}</td>
    
      <td>{{ $c->desc }} $</td>
     
     
    </tr>
 @endforeach
 
  </tbody>
</table>

</div>
@endsection