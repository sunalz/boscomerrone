@extends('main')

@section('content')
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
          <h2 class="mt-4">Cosa Facciamo</h2>
          <p>Ti offriamo la possibilità di una esperienza unica nel ritrovare il contatto con la (tua ) vera natura , spegnendo il telefono , disdicendo tutti i tuoi impegni ,vieni a sognare senza andare troppo lontano, ti offriamo lo spettacolo più straordinario a pochi chilometri di distanza dal famoso borgo medievale di Sant’Agata dei Goti  in provincia di Benevento a soli 47 km da Napoli ,25 da Caserta , 30 da Benevento ,40 da Avellino,   lo spettacolo più straordinario ti aspetta e vedrai che ritornerai a meravigliarti,adottando la tua gallina e coltivando il tuo orto,condividerai  e farai l’esperienza del vero incontro.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
          </p>
        </div>
        <div class="col-sm-4" style="box-shadow: 0px 0px 20px #000">
          <h2 class="mt-4">Contattaci</h2>
          <address>
            <strong>Eventi in Campagna</strong>
            <br>3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </address>
          <address>
          
            <label class="disabled" for="disabledTextInput">Cellulare: 339 4997878</label>
            <br>
            <a class="btn btn-primary" href="contact">Email Me</a>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-block btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-block btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-block btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        </div>
        </div>
      
      <!-- /.row -->
@stop
  