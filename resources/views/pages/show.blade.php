@extends('main');
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
            {{Form::text('title',$post->title,['class' => 'form-control' ])}}
            {{Form::textarea('body',$post->body,['class' => 'form-control' ])}}

      </div>
      <div class="col-md-3">
        <a href="/" class="btn btn-danger ">Go Back</a>
        {{ Form::hidden('_method','PUT')}}
        {{Form::submit('Save Changes',['id' =>'button', 'class'=>'btn btn-success'])}}
      </div>
        </div>
      </div>

    </div>
@foreach ($post->images as $img)


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h1>Event 1</h1>

          <img src="/storage/images/homepage/{{$img->photo1}}" class="img-fluid img-thumbnail" width="400" height="200" alt="">
    <hr>
          {{Form::text('card_title1',$post->card_title1,['class' => 'form-control text-capitalize card-title' ])}}
          {{Form::textarea('card_body1',$post->card_body1,['class' => 'form-control card-text' ])}}
<br>
          {{Form::label('featured_image1','Choose Image',['class' => 'form-control'])}}
          {{Form::file('featured_image1')}}


        </div>
        <div class="col-md-4">
          <h1>Event 2</h1>
          <img src="/storage/images/homepage/{{$img->photo2}}" class="img-fluid img-thumbnail" width="400" height="200" alt="">
    <hr>
          {{Form::text('card_title2',$post->card_title2,['class' => 'form-control text-capitalize card-title' ])}}
          {{Form::textarea('card_body2',$post->card_body2,['class' => 'form-control card-text' ])}}
<br>
          {{Form::label('featured_image2','Choose Image' ,['class' => 'form-control'])}}
          {{Form::file('featured_image2')}}


        </div>
        <div class="col-md-4">
          <h1>Event 3</h1>
          <img src="/storage/images/homepage/{{$img->photo3}}" class="img-fluid img-thumbnail" width="400" height="200" alt="">
    <hr>
          {{Form::text('card_title3',$post->card_title3,['class' => 'form-control text-capitalize card-title' ])}}
          {{Form::textarea('card_body3',$post->card_body3,['class' => 'form-control card-text' ])}}
<br>
          {{Form::label('featured_image3','Choose Image',['class' => 'form-control'])}}
          {{Form::file('featured_image3')}}


        </div>
      </div>
      {!!Form::close()!!}
      @endforeach


@endsection
