@extends('main')
@section('title','Album Contents')
@section('content')

    <div class="col-md-3 float-left"></div>
    <div class="card border-primary mb-3 col-md-6" style="padding:10px; margin-top: 100px; box-shadow: 5px 10px 80px;">
      <h1 class="text-center text-capitalize" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">{{$album->name}}</h1>

      <br>
      @if (Auth::check())
        <a href="/photos/create/{{$album->id}}" class="btn btn-outline-primary btn-block">Upload photo To album</a>
      @endif
      <a href="/albums" class="btn btn-outline-warning btn-block ">Go Back</a>
      <hr>
      @if (count($album->photos)> 0)
        <?php
        $colcount = count($album->photos);
        $i = 1;
         ?>
         <div class="col-md-3 float-left"></div>
          <div id="contactform" class="border-primary" style="margin-bottom:10px background-color:transparent;">
           <div id="photos" class="container">

             <div class="row text-center">
             @foreach ($album->photos as $photo)
                 @if ($i == $colcount)
                   <div class='medium-4 columns end'>
                     <a href="/photos/{{$photo->id}}">
                       <img style="width:300px; height:150px;" class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                     </a>
                     <br>
                     <h4>{{$photo->title}}</h4>
                     @else
                       <div class='medium-4 columns'>
                         <a href="/photos/{{$photo->id}}">
                           <img style="width:300px; height:150px;" class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                         </a>
                         <br>
                         <h4>{{$photo->title}}</h4>
                       @endif
                       @if ($i % 3 ==0)
                       </div></div><div class="row text-center">
                       @else
                       </div>

                 @endif
                   <?php $i++; ?>

               @endforeach

             </div>

           </div>
         @else
           <h1 class="text-center">No Photos to Display!</h1>
         @endif
         <hr>
         @if (Auth::check())
         {!!Form::open(['action' => ['AlbumsController@destroy',$album->id],'method' =>'POST'])!!}
           {{Form::hidden('_method' , 'DELETE')}}
           {{Form::submit("Delete Album?",['class' => 'btn btn-danger btn-block text-capitalize'])}}
         {!!Form::close()!!}
         @endif

          </div>


    </div>

@endsection
