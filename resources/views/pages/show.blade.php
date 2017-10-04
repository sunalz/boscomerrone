@extends('main')
@section('title','Editor')
@section('content')
<br><br><br>
<!-- Main jumbotron for a primary marketing message or call to action -->

    <div id="jumbo" class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h1 class="display-3">Main Description</h1>
            {!!form::open(['action' => ['PostController@update',$post->id],'method' => 'POST','class' =>'form-control', 'files' => true])!!}
            {{Form::text('title',$post->title,['class' => 'form-control'])}}
            {{Form::textarea('body',$post->body,['class' => 'form-control' ])}}

      </div>
      <div class="col-md-3">
        <a href="/" class="btn btn-danger ">Go Back</a>
        {{ Form::hidden('_method','PUT')}}
        {{Form::submit('Save Changes',['id' =>'button', 'class'=>'btn btn-success'])}}
          {!!Form::close()!!}
      </div>
        </div>
      </div>

    </div>
@endsection
