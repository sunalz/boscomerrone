@extends('main')
@section('title','Contattaci')
@section('content')
<div class="col-md-3 float-left"></div>
	<div id="contactform" class="card border-primary mb-3 col-md-6" style="padding:10px; margin: 50px; box-shadow: 5px 10px 80px;">
	<h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Contattaci!</h1>
			<form action="{{ url('/contact')}}" method="POST">
				{{csrf_field()}}
				  <div class="form-group">
				  <input id="name" name="name" class="form-control" placeholder="Nome">
				  </div>
					<div class="form-group">
				  <input id="subject" name="subject" class="form-control" placeholder="Soggetto">
				  </div>
				  <div class="form-group">
				  <input id="email" name="email" class="form-control" placeholder="Email">
				  </div>
				  <div class="form-group">
					<textarea id="message" name="message" style="height: 250px" class="form-control" placeholder="Il Tuo Messaggio" ></textarea>
				  </div>
				  <div class="row">
				  <div class="col">
				  	<input type="submit" value="Send Message" class="btn btn-primary btn-block">
				  </div>
				  <div class="col">
				  	<a href="/" class="btn btn-danger btn-block">Cancel</a>
				  </div>
				  </div>
			</form>
	</div>
@stop
