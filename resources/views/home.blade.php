@extends('main')
@section('content')
<div class="recomended container">
  <h3 class="p-3 text-center">Recomended <span class="text-warning">Anime</span></h3>
  <div class="row row-cols-1 row-cols-md-2">

    @foreach ($animes as $anime)
        <div class="col">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="/detail/{{ $anime->id }}"><img src="{{ $anime->cover_img }}" class="img-fluid rounded-start" alt="..."></a>
              </div>
              <div class="col-md-8">
                <a href="/detail/{{ $anime->id }}" class="text-decoration-none text-dark">
                  <div class="card-body">
                    <h5 class="card-title">{{ $anime->judul }}</h5>
                    <div class="m-2">
                      <a href="#" class="btn btn-warning rounded-pill"><small>{{ $genre::find($anime->genre_id)->genre }}</small></a>
                    </div>
                    <p class="card-text">{{ mb_strimwidth($anime->sinopsis, 0, 150, '...') }}</p>
                    <p class="card-text"><small class="text-muted">Last updated: {{ $anime->updated_at }}</small></p>
                  </div>
              </a>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>

<div class="ongoing mt-3" style="background-color: #111">
  <h3 class="text-light p-3 text-center">Anime <span class="text-warning">Ongoing</span></h3>
  <div class="row row-cols-1 row-cols-md-2 container mx-auto">

    @foreach ($ongoing as $anime)
        <div class="col">
          <div class="card mb-3 bg-dark text-light" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="/detail/{{ $anime->id }}">
                  <img src="{{ $anime->cover_img }}" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <a href="/detail/{{ $anime->id }}" class="text-decoration-none text-light">
                      <h5 class="card-title">{{ $anime->judul }}</h5>
                    </a>
                    <div class="m-2">
                      <a href="#" class="btn btn-warning rounded-pill"><small>{{ $genre::find($anime->genre_id)->genre }}</small></a>
                    </div>
                    <p class="card-text">{{ mb_strimwidth($anime->sinopsis, 0, 150, '...') }}</p>
                    <p class="card-text"><small class="text-muted">Last updated: {{ $anime->updated_at }}</small></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>
@endsection