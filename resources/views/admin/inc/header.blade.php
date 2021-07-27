<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSOJ1S6ZINZCuC-08H-CQsnveEkLF6_HDmKSOuY2SGZKlACC3s6&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


</style>
</head>

    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.cat.index') }}">Categories </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.trainer.index') }}">Trainers </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.course.index') }}">Courses </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.student.index') }}">Student </a>
      </li>
    </ul>
   
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.logout') }}">Logout </a>
      </li>
     
  
    </ul>
  </div>
</nav>
