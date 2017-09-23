@extends('main')
@section('title','Crea un Album')
@section('content')

    <div class="col-md-3 float-left"></div>
    	<div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin: 50px; box-shadow: 5px 10px 80px;">
    	<h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Crea un Album</h1>
      {!!form::open(['action' => 'AlbumsController@store','method' => 'POST','class' =>'form-control', 'enctype' => 'multipart/form-data'])!!}
        {{Form::text('name','',['placeholder' => 'Album Name', 'class' => 'form-control' ])}}
        {{Form::textarea('description','',['placeholder' => 'Album Description', 'class' => 'form-control' ])}}
        {{Form::file('cover_image')}}
        {{Form::submit('Crea Album',['class'=>'btn btn-primary btn-block'])}}
        <a href="/" class="btn btn-danger btn-block">Cancel</a>
      {!!Form::close()!!}
    	</div>
 
@endsection
