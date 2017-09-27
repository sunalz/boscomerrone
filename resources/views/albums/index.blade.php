@extends('main')
@section('title','Photo Gallery')
@section('content')
    @if (count($albums)> 0)
      <?php
      $colcount = count($albums);
      $i = 1;
       ?>
       <div class="col-md-3 float-left"></div>
       	<div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin: 50px; box-shadow: 5px 10px 80px;">
       	<h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Galleria!</h1>
        @if (Auth::check())
          <a href="/create" class="btn btn-outline-primary btn-block">Crea Un Nuovo Album?</a>
          @else
              <a href="login" class="btn btn-outline-primary btn-block">Login To Create An Album?</a>
        @endif

        <br>
         <div id="albums" class="container">

           <div class="row text-center">
             @foreach ($albums as $album)
               @if ($i == $colcount)
                 <div class='medium-4 columns end'>
                   <a href="albums/{{$album->id}}">
                     <img style="width:300px; height:150px;" class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                   </a>
                   <br>
                   <h4>{{$album->name}}</h4>
                   @else
                     <div class='medium-4 columns'>
                       <a href="albums/{{$album->id}}">
                         <img style="width:300px; height:150px;" class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                       </a>
                       <br>
                       <h4>{{$album->name}}</h4>
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
         <br>
         <h1 class="text-center">No Albums to Display!</h1>
       @endif
       	</div>

@endsection
