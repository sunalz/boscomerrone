
@if(count($errors)>0)
  @foreach ($errors->all() as $error)
    <div id="flash" class="alert alert-warning alert-dismissible fade show fixed-top" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      {{$error}}

    </div>

  @endforeach
@endif

@if (session('success'))
  <div id="flash" class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    {{session('success')}}
  </div>
@endif

@if (session('error'))
  <div id="flash" class="alert alert-warning alert-dismissible fade show fixed-top" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    {{session('error')}}
  </div>

@endif
