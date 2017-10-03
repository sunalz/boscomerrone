@extends('main')
@section('title','Events')
@section('content')
  <div class="container">
       <div class="header clearfix">

       </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <ol class="carousel-indicators">
                 @foreach( $photos->eventphotos as $photo )
                     <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                 @endforeach
             </ol>
  @foreach ($photos->eventphotos as $photo)
       <div class="carousel-item {{$loop->first ? 'active' : ''}}">
         <img class="d-block w-100 img-fluid img-thumbnail sliderimg" src="/storage/events/{{$photos->id}}/{{$photo->name}}" alt="{{$photo->name}}">
       </div>
       @endforeach

   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
       </div>
        </div>
         </div>
       <div class="container">
  <div class="row">
    <div class="col-sm-4 sidenav">
      <br>
      <div class="card text-white bg-warning mb-3" style="max-width: 40rem;">
        <div class="card-header text-dark"><strong><h4>Event Info</h4></strong></div>
        <div class="card-body">
  <table  class="table-sm ">
  <tbody style="border:none;">
    <tr>
      <td class="bg-warning">Prezzo</td>
      <td class="bg-warning">{{$photos->price}}</td>
    </tr>
    <tr>
      <td class="bg-warning">Spazio</td>
      <td class="bg-warning">{{$photos->guests}}</td>
    </tr>
    <tr>
      <td class="bg-warning">Data D'Inizio:</td>
      <td class="bg-warning">{{$photos->start_date}}</td>
    </tr>
    <tr>
      <td class="bg-warning">Data Di Fine</td>
      <td class="bg-warning">{{$photos->end_date}}</td>
    </tr>
    <tr>
      <td class="bg-warning">Inizia a:</td>
      <td class="bg-warning">{{$photos->start_at}}</td>
    </tr>
    <tr>
      <td class="bg-warning">Termina a:</td>
      <td class="bg-warning">{{$photos->end_at}}</td>
    </tr>
    <tr>
      <td class="bg-warning">Vuoi Unirti?</td>
      <td class="bg-warning"><a class="btn btn-success btn-block" href="#">Si!</a></td>
    </tr>

  </tbody>
</table>
        </div>
      </div>    </div>

    <div class="col-sm-8">
      <br>
      <div class="card">
      <h4 class="card-header text-capitalize">{{$photos->title}}<p class="float-right small">Event starts at: {{$photos->start_at}}</p></h4>
      <div class="card-body">
        <h4 class="card-title">Di Questo Evento...</h4>
        <p class="card-text">{{$photos->description}}</p>
      </div>
    </div>
</div>
    </div>
      </div>
@endsection
