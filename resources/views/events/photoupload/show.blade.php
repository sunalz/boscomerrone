@extends('main')
@section('title','Event Photos')
@section('content')
  <br><br><br><br><br>
<div class="container card border-primary mb-3">
  <h1 class="text-center" style="font-family: 'Coca cola ii', cursive; margin-top:10px; font-size: 80px; text-shadow: 1px 0px 20px;">Event Photos</h1>

  <div class="row col-md-12">
<hr>
      @foreach ($posts->eventphotos as $post)
        <div class="col-md-4">
          <img class="img-thumbnail thumbs" style="width:100%; height:200px;" src="/storage/events/{{$posts->id}}/{{$post->name}}" alt="{{$post->name}}">
          @if (Auth::check())
            {!!Form::open(['action' => ['EventphotosController@destroy',$post->id],'method' =>'POST'])!!}
              {{Form::hidden('_method' , 'DELETE')}}
              {{Form::submit('&times;',['class' => 'btn btn-danger topright close pointer'])}}
            {!!Form::close()!!}
          @endif
</div>
      @endforeach
      @if ($posts->eventphotos->isEmpty())
        <h1>no photos</h1>
      @endif
      <a href="/event/edit/{{$posts->id}}"><img src="/images/add_image.png" style="width:200px; height:200px; margin-left:30%;" alt=""></a>
  </div>
</div>

@endsection
