@extends('main')
@section('title','Album Contents')
@section('content')
  <div class="col-md-3 float-left"></div>
    <div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin: 50px; box-shadow: 5px 10px 80px;">
      <h1 class="text-center text-capitalize" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">{{$album->name}}</h1>
      <a href="/photos/{{$album->id}}" class="btn btn-block btn-primary">Upload photo To album</a>
      <a href="/gallery" class="btn btn-block btn-danger ">Go Back</a>
      <hr>
    </div>
@endsection
