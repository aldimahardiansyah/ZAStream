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
                    <p class="card-text">
                      <small><a href="/status/{{ $anime->status->status }}" class="text-decoration-none {{ $anime->status_id==1?'text-danger':'text-success' }}">
                        {{ $anime->status->status }}
                      </a></small>
                    </p>
                    <a href="/detail/{{ $anime->id }}" class="card-text text-dark text-decoration-none">
                      <p>{{ mb_strimwidth($anime->sinopsis, 0, 150, '...') }}</p>
                    </a>
                    <div class="m-2">
                      @foreach ($anime_genres::where('anime_id', $anime->id)->get() as $anime_genre)
                          <a href="/genre/{{ $genre::find($anime_genre->genre_id)->genre }}" class="btn btn-warning btn-sm rounded-pill">{{ $genre::find($anime_genre->genre_id)->genre }}</a>
                      @endforeach
                    </div>
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
                      @foreach ($anime_genres::where('anime_id', $anime->id)->get() as $anime_genre)
                      <a href="/genre/{{ $genre::find($anime_genre->genre_id)->genre }}" class="btn btn-warning btn-sm rounded-pill">{{ $genre::find($anime_genre->genre_id)->genre }}</a>
                      @endforeach
                    </div>
                    <a href="/detail/{{ $anime->id }}" class="card-text text-light text-decoration-none">
                      <p>{{ mb_strimwidth($anime->sinopsis, 0, 150, '...') }}</p>
                    </a>
                    <p class="card-text"><small class="text-muted">Last updated: {{ $anime->updated_at }}</small></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>

<div class="recomended container mt-4">
  <h3 class="p-3 text-center">Movie <span class="text-warning">Anime</span></h3>
  <div class="row row-cols-1 row-cols-md-2">

    @foreach ($movie as $anime)
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
                    <p class="card-text">
                      <small><a href="/status/{{ $anime->status->status }}" class="text-decoration-none {{ $anime->status_id==1?'text-danger':'text-success' }}">
                        {{ $anime->status->status }}
                      </a></small>
                    </p>
                    <a href="/detail/{{ $anime->id }}" class="card-text text-dark text-decoration-none">
                      <p>{{ mb_strimwidth($anime->sinopsis, 0, 150, '...') }}</p>
                    </a>
                    <div class="m-2">
                      @foreach ($anime_genres::where('anime_id', $anime->id)->get() as $anime_genre)
                          <a href="/genre/{{ $genre::find($anime_genre->genre_id)->genre }}" class="btn btn-warning btn-sm rounded-pill">{{ $genre::find($anime_genre->genre_id)->genre }}</a>
                      @endforeach
                    </div>
                  </div>
              </a>
              </div>
            </div>
          </div>
        </div>
    @endforeach

  </div>
</div>
@endsection