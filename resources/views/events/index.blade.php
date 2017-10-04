@extends('main')
@section('title', 'Events')
@section('content')
<br><br><br>
<div class="container-fluid">
<div class="container text-center">
  <h1 style="font-size:100px;" class="coca">All Events</h1>
</div>
<div class="row">

  @foreach ($posts as $post)
<div class="col-md-4" style="margin-bottom:10px;">
      <div class="card text-center">
  <div class="card-header">
  <p>
      @if (Auth::check())
        {!!Form::open(['action' => ['EventController@destroy',$post->id],'method' =>'POST'])!!}
       {{Form::hidden('_method' , 'DELETE')}}
       {{Form::submit("Delete?",['class' => 'btn btn-outline-danger float-right'])}}
     {!!Form::close()!!}
      @endif
 </p>
    <a class="btn btn-outline-success float-right" style="margin-right:10px;" href="/event/edit/{{$post->id}}">Edit</a>
  </div>
  <div class="card-body">
    <h4 class="card-title text-capitalize">{{$post->title}}</h4>
    <p class="card-text">{{substr($post->description,0,100)}}{{strlen($post->description) > 100 ? "..." : ""}}</p>
    <a href="/events/{{$post->id}}" class="btn btn-primary">Find out more..!</a>
  </div>
  <div class="card-footer text-muted">
    {{$post->created_at->diffForHumans()}}
  </div>
</div>
</div>
@endforeach
<div class="img-fluid col-md-4" style="padding-left:10%;">
  <a href="/events/create"><img src="/images/add_event.png" style="width:250px; height:250px;"></a>
</div>

</div>
</div>
@endsection
