@extends('main')
@section('title','Photo Gallery')
@section('content')
    @if (count($albums)> 0)
      <?php
      $colcount = count($albums);
      $i = 1;
       ?>
      <div id="albums">
        <div class="row text-center clear-fix">
          @foreach ($albums as $album)
            @if ($i == $colcount)
              <div class='medium-4 columns end'>
                <a href="gallery/{{$album->id}}">
                  <img style="width:300px; height:150px;" class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>
                <br>
                <h4>{{$album->name}}</h4>
                @else
                  <div class='medium-4 columns'>
                    <a href="gallery/{{$album->id}}">
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
      <p>No Albums to Display</p>
    @endif
@endsection
