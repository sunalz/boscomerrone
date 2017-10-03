@extends('main')
@section('title', 'Events')
@section('content')
<br><br><br>
<div class="container-fluid">
<div class="row">
  @foreach ($posts as $post)
<div class="col-md-4" style="margin-bottom:10px;">
      <div class="card text-center">
  <div class="card-header">
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
  <a href="/events/create"><img src="/images/add_event.png" style="width:300px; height:300px;"></a>
</div>

</div>
</div>
@endsection
