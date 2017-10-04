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
            <h1 class="display-3 text-center mt-4" style="color: #ffcc00; font-size: 100px; text-shadow:1px 1px 50px; font-family: 'Coca Cola ii', cursive; ">Bosco Merrone</h1>
            <p class="display-3 text-center mt-1" style="color: #ffcc00; font-size: 50px; text-shadow:1px 1px 50px; font-family: 'Coca Cola ii', cursive; padding:0; margin: 0; ">Nuova Gestione</p>
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
          </address>

          <address>
            <label class="disabled" for="disabledTextInput">Cellulare: 339 4997878</label>
            <br>
            <a class="btn btn-primary" href="contact">Email Me</a>
          </address>
        </div>
      </div>
      <br>
      <!-- /.row -->

          @endforeach
        @endforeach
        <div id="map"></div>
        <br>

      <!-- /.row -->

@stop
