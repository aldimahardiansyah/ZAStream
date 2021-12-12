@extends('main')
@section('content')
<div class="ongoing">
  <h3>Anime Ongoing</h3>
  <div class="row row-cols-1 row-cols-md-2">

    @foreach ($animes as $anime)
        <div class="col">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $anime->cover_img }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $anime->judul }}</h5>
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

<div class="recomended">
  <h3 class="text">Recomended Anime</h3>
  <div class="row row-cols-1 row-cols-md-2">
    <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection