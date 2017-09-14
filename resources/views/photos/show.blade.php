@extends('main')
@section('title','Photo view')
@section('content')

<div class="col-md-3 float-left"></div>
  <div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin-top: 100px; box-shadow: 5px 10px 80px;">
  <h1 class="text-center text-capitalize" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">{{$photo->title}}</h1>
  <a class="btn btn-success" href="/albums/{{$photo->album_id}}"><< Back to Album</a>
  <hr>
  <p class="text-capitalize">{{$photo->description}}</p>
  <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <strong><small>Size: {{$photo->size}}</small></strong>
  <br><br>
  {!!Form::open(['action' => ['PhotosController@destroy',$photo->id],'method' =>'POST'])!!}
    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Delete Photo',['class' => 'btn btn-danger btn-block'])}}
  {!!Form::close()!!}
  <hr>

  </div>
@endsection
