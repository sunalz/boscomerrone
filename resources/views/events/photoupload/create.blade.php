@extends('main')
@section('title','Upload Photos')
@section('content')
  <div class="col-md-3 float-left" style="margin-top:50px;"></div>
    <div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin-top: 100px; box-shadow: 5px 10px 80px;">
    <h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Upload A Photo </h1>
      {!!Form::open(['route' => 'photo-upload', 'class' =>'dropzone', 'file' => 'true', 'enctype' => 'multipart/form-data'])!!}
      {{Form::hidden('event_id', $event_id)}}
      {!!Form::close()!!}
      <br>
      <a href="/events/{{$event_id}}" class="btn btn-primary btn-block">View Event</a>
    </div>
@endsection
