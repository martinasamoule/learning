@if ($errors->any()) <!--true lw feh error !-->
<ul class="alert alert-danger list-unstyled"> 
@foreach($errors->all() as $error )
<li> {{ $error }}</li>
@endforeach
</lu>
@endif