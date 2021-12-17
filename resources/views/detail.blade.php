@extends('main')
@section('content')
    <div class="container">
        <h3 class="text-center">{{ $anime->judul }}</h3>
        <div class="mt-4">
            <div class="img mx-auto d-flex justify-content-center align-items-end" style="height:20em; background-size:cover; background-repeat:no-repeat; background-image: url({{ $anime->cover_img }});">
                <img class="shadow-lg rounded mb-2" src="{{ $anime->cover_img }}" alt="gambar {{ $anime->judul }}" height="200em">
            </div>
        </div>
        <div class="mt-5">
            <h6 class="p-2 fw-bold"><i class="fa fa-info text-warning" style="margin-right: 10px"></i> Detail</h6>
            <hr>
            <table class="table table-striped">
                <tr>
                    <td>Judul</td>
                    <td>{{ $anime->judul }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><a class="text-decoration-none" href="/status/{{ $status }}">{{ $status }}</a></td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>{{ $anime->rating }}</td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>
                        @foreach ($genres as $genre)
                            <a class="text-decoration-none" href="/genre/{{ $genre }}">{{ $genre }}</a>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><a class="text-decoration-none" href="/type/{{ $type }}">{{ $type }}</a></td>
                </tr>
            </table>
        </div>
        <div class="mt-4">
            <h6 class="p-2 fw-bold"><i class="fa fa-align-left text-warning" style="margin-right: 10px"></i>Sinopsis</h6>
            <hr>
            <p>
                <strong>{{ $anime->judul }}</strong> - {{ $anime->sinopsis }}
            </p>
        </div>
        <div class="mt-4">
            <h6 class="p-2 fw-bold"><i class="fa fa-play-circle text-warning" style="margin-right: 10px"></i>Nonton</h6>
            <hr>

        </div>
    </div>
@endsection