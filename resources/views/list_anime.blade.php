@extends('main')
@section('content')
    <h5 class="text-center my-3 fw-bold">List Anime</h5>
    <p class="text-center">Menampilkan total {{ count($animes) }} anime:</p>
    <div class="container">
        <ul class="row-md-4 d-md-flex flex-wrap justify-content-end">
            @foreach ($animes as $anime)
                <li class="my-2 col-md-5 mx-2">
                    <a href="/detail/{{ $anime->id }}" class="text-decoration-none">{{ $anime->judul }} <small class="{{ $anime->status_id==1?'text-danger':'text-success' }}">({{ $anime->status->status }})</small></a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection