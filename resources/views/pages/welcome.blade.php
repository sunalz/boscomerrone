@extends('main')
@section('title','Benvenuto')
@section('content')

  @foreach ($posts as $post)
    @foreach ($post->images as $img)



    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-12">
            <h1 class="display-3 text-center mt-4" style="color: #ffcc00; font-size: 135px; font-family: 'Coca Cola ii', cursive; ">Bosco Merrone</h1>
            <p class="display-3 text-center mt-1" style="color: #ffcc00; font-size: 60px; font-family: 'Coca Cola ii', cursive; padding:0; margin: 0; ">Nuova Gestione</p>
          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->
     <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">{{$post->title}}</h2>
          <p>{{$post->body}}</p>
        </div>
        <div class="col-sm-4" style="box-shadow: 0px 0px 20px #000">
          <h2 class="mt-4">Contattaci</h2>
          <address>
            <strong>Eventi in Campagna</strong>
            <br>Azienda Agricola Bosco Merrone
            <br>C.da Fienile snc
            <br>82030 Frasso Telesino Benevento
            <br><a href="#map">Check the Map</a>
          </address>
        
          <address>
            <label class="disabled" for="disabledTextInput">Cellulare: 339 4997878</label>
            <br>
            <a class="btn btn-primary" href="contact">Email Me</a>
          </address>
        </div>
      </div>
      <!-- /.row -->
      <h1 style="font-family:'Coca cola ii', cursive; font-size:50px;">Eventi</h1>
      <hr>
      <div class="row">

        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="/storage/images/homepage/{{$img->photo1}}" width="300" height="200" alt="">
            <div class="card-body">
              <h4 class="card-title">{{$post->card_title1}}</h4>
              <hr>
              <textarea disabled="disabled" style="height:200px; background-color:white" class="card-text">{{$post->card_body1}}</textarea>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-block btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="/storage/images/homepage/{{$img->photo2}}" alt="">
            <div class="card-body">
              <h4 class="card-title">{{$post->card_title2}}</h4>
              <hr>
              <textarea disabled="disabled" style="height:200px; background-color:white" class="card-text">{{$post->card_body2}}</textarea>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-block btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top rounded" src="/storage/images/homepage/{{$img->photo3}}" alt="">
            <div class="card-body">
              <h4 class="card-title">{{$post->card_title3}}</h4>
              <hr>
              <textarea disabled="disabled" style="height:200px; background-color:white" class="card-text">{{$post->card_body3}}</textarea>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-block btn-primary">Find Out More</a>
            </div>
          </div>
        </div>
        </div>
        </div>
          @endforeach
        @endforeach
        <div id="map"></div>
        <br>

      <!-- /.row -->

@stop
