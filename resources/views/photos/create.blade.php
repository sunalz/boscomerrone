@extends('main')
@section('title','Upload Photos')
@section('content')

    <div class="col-md-3 float-left" style="margin-top:50px;"></div>
    	<div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin-top: 100px; box-shadow: 5px 10px 80px;">
    	<h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Upload A Photo </h1>
      {!!form::open(['action' => 'PhotosController@store','method' => 'POST','class' =>'form-control', 'enctype' => 'multipart/form-data'])!!}
        {{Form::text('title','',['placeholder' => 'Photo Title', 'class' => 'form-control' ])}}
        {{Form::textarea('description','',['placeholder' => 'Photo Description', 'class' => 'form-control' ])}}
        {{Form::hidden('album_id', $album_id)}}
        {{Form::file('photo')}}
        {{Form::submit('submit')}}
      {!!Form::close()!!}
    	</div>

@endsection
