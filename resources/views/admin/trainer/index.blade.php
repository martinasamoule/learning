@extends('admin.inc.layout')
@section('content')

<div class="container">
    <div class="d-flex justify-content-between mb-3">
    <h6>Traniers</h6>
    <a class="btn btn-sm btn-primary"  href="{{ route('admin.trainer.create') }}">
     Add new 
</a>
      </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">spec</th>
      
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($trainers as $t)
    <tr>
      <th scope="row"> {{ $loop->iteration }}</th>
      <td>
      <img src="{{ asset('uploads/trainers/' . $t->img ) }}" height="50px" alt="no">
      </td>
      <td>{{ $t->name }}</td>
      <td>
      @if($t->phone !==null)
      {{ $t->phone }}
      @else
      not exist
      @endif
      </td>
      <td>{{ $t->spec }}</td>
     
      <td>
          <a class="btn btn-sm btn-info"  href="{{ route('admin.trainer.edit', $t->id) }}">Edit</a>
          <a class="btn btn-sm btn-danger"  href="{{ route('admin.trainer.delete' ,$t->id) }}">Delete</a>
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
@endsection