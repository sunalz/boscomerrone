@extends('main')
@section('title','Edit Events')
@section('content')
  <div class="container">
    <br><br><br>
    <div id="contactform" class="card border-primary mb-3 col-md-12" style="padding:10px; margin: 50px; box-shadow: 5px 10px 80px;">
    <h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Modifica Evento</h1>

{!! Form::open(['action' =>['EventController@update',$post->id], 'class' => 'form-control', 'method' => 'POST']) !!}
      <br>
        <div class="form-row col-md-12">
          <div class="col-md-3">
            {{Form::label('title','Event Title:')}}
            {{Form::text('title',$post->title,['class' => 'form-control'])}}
            {{Form::label('start_date','Start Date:')}}
            {{Form::text('start_date',$post->start_date,['id' => 'start-dt','class' => 'form-control'])}}
            {{Form::label('start_at','Start At:')}}
            {{Form::text('start_at',$post->start_at,['class' => 'form-control','id'=>'start-at'])}}
            {{Form::label('guests','Guests:')}}
            {{Form::text('guests',$post->guests,['class' => 'form-control','id'=>'guests'])}}

          </div>
          <div class="col-md-3">
          {{Form::label('price','Price €:')}}
          {{Form::text('price',$post->price,['class' => 'form-control', 'id' => 'price'])}}
          {{Form::label('end_date','End Date:')}}
          {{Form::text('end_date',$post->end_date,['id'=>'end-date','class' => 'form-control'])}}
          {{Form::label('end_at','End At:')}}
          {{Form::text('end_at',$post->end_at,['id'=>'end-at','class' => 'form-control'])}}
          <br>
          <a class="btn btn-danger btn-block"style="margin-top:5.5%;" href="/event/photos/{{$post->id}}">Delete Photos?</a>
          </div>
          <div class="col-md-6">
            {{Form::label('description','Event Description:')}}
            {{Form::textarea('description',$post->description,['class' => 'form-control'])}}
          </div>
          <div class="col-md-6">
          <a href="/events" class="btn btn-danger btn-block">Cancel</a>
          </div>
          <div class="col-md-6">
              {{ Form::hidden('_method','PUT')}}
            {{Form::submit('Save and Add Photos',['class'=>'btn btn-primary btn-block'])}}
          </div>
        </div>

{!! Form::close() !!}

    </div>
    </div>
@endsection
