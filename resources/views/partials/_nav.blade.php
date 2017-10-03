<body>
     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="box-shadow: 0px 20px 80px #fff;">
       <a class="navbar-brand" href="/"><img style="height: 25px; width: 25px; filter: invert(100%);" src="/images/slogan.png"> LA MUSICA DEL BOSCO</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
         <li class="{{Request::is('albums') ? "active nav-item" : "nav-item"}}">
           <a class="nav-link" href="/albums">Galleria <span class="sr-only">(current)</span></a>
         </li>
         <li class="{{Request::is('contact') ? "active nav-item" : "nav-item"}}">
           <a class="nav-link" href="/contact">Contattaci</a>
         </li>
         <li class="{{Request::is('events') ? "active nav-item" : "nav-item"}}">
           <a class="nav-link" href="/events">Eventi</a>
         </li>
         @if (Auth::check())

       </ul>
       <div class="btn-group">
        <a class="btn btn-outline-secondary text-capitalize dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Ciao {{Auth::user()->name}}!
        </a>

        <div class="dropdown-menu dropdown-menu-right">
          <li class="nav-item" style="padding-right:20px; padding-left:10px;">
            <a class="btn btn-light btn-block text-left" href="/create">Create Album</a>
          </li>
          <li class="nav-item" style="padding-right:20px; padding-left:10px;">
            <a class="btn btn-light btn-block text-left" href="/post/1">Editor</a>
          </li>
          <li class="nav-item" style="padding-right:20px; padding-left:10px;">
            <a class="btn btn-light btn-block text-left" href="/events/create">Create Event</a>
          </li>
          <li class="nav-item" style="padding-right:20px; padding-left:10px;">
            <a class="btn btn-danger btn-block text-left" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
        </div>
        @else
          <a href="/login" class="btn btn-outline-secondary text-capitalize" style="color:white;">
            Log In
          </a>
      @endif
</div>
     </div>
   </nav>
