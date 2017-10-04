@extends('main')
@section('title','Create event')
@section('content')
  <br><br><br>
  <div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-center">
      <div class="row">
        <div class="container">
  {!!Form::open(['route' =>'create-event', 'class' =>'form-control'])!!}
 <div class="form-group">

     {{Form::text('title','',['placeholder' => 'Title', 'class' => 'form-control' ])}}
 </div>
 <div class="form-group">
   {{Form::textarea('description','',['placeholder' => 'Description', 'class' => 'form-control' ])}}

 </div>
 <div class="form-row">
   <div class="form-group col-md-1">
     {{Form::label('price','Euro €',['class'=>'form-control'])}}
   </div>
   <div class="form-group col-md-1">
     {{Form::text('price','',['placeholder' => 'Price', 'class' => 'form-control' ])}}

   </div>
   <div class="form-group col-md-2">
     {{Form::text('guests','',['placeholder' => 'Guests', 'class' => 'form-control' ])}}

   </div>
   <div class="form-group col-md-2">
     {{Form::text('start_date','',['placeholder' => 'Start Date?', 'id' =>'start-date' ,'class' => 'form-control' ])}}

   </div>
   <div class="form-group col-md-2">
     {{Form::text('end_date','',['placeholder' => 'End Date?', 'class' => 'form-control', 'id' =>'end-date' ])}}

   </div> <div class="form-group col-md-2">
     {{Form::text('start_at','',['placeholder' => 'Start at?', 'class' => 'form-control', 'id' =>'start-at' ])}}

    </div> <div class="form-group col-md-2">
       {{Form::text('end_at','',['placeholder' => 'End at?', 'class' => 'form-control' , 'id' =>'end-at' ])}}
     </div>
     <div class="form-group col-md-6">
       {{Form::submit('Post',['class' =>'btn btn-primary btn-block'])}}
     </div>
     <div class="form-group col-md-6">
       <a href="/" class="btn btn-danger btn-block">Cancel</a>
     </div>
     {!!Form::close()!!}
 </div>




        </div>



      </div>

    </div>

  </div>
</div>

@endsection
