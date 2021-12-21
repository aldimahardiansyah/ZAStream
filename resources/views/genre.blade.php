@extends('main')
@section('content')
    <h5 class="text-center my-3 fw-bold">Genre List</h5>
    <p class="text-center">Menampilkan total {{ count($genres) }} genre:</p>
    <div class="container">
        <ul class="row-md-4 d-md-flex flex-wrap justify-content-end">
            @foreach ($genres as $genre)
                <li class="my-2 col-md-5 mx-2">
                    <a href="/genre/{{ $genre->genre }}" class="text-decoration-none">{{ $genre->genre }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection