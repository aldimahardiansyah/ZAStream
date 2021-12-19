@extends('main')
@section('content')
    <div>
        <h4 class="text-warning fw-bold text-center">{{ $title }} <span class="text-dark">{{ $search }}</span></h4>

        <div class="container row row-cols-2 row-cols-md-6 g-4 mt-2 mx-auto d-flex justify-content-center">
            @foreach ($results as $anime)
                <div class="col">
                    <div class="card border-0">
                    <a href="/detail/{{ $anime->id }}" class="text-decoration-none">
                        <img src="{{ $anime->cover_img }}" class="card-img-top" alt="Gambar {{ $anime->judul }}">
                        <div class="card-body px-0">
                            <h6 class="card-title">{{ $anime->judul }}</h6>
                            <a href="/status/{{ $anime->status->status }}" class="text-decoration-none">
                                <small class="card-text">{{ $anime->status->status }}</small>
                            </a>
                        </div>
                    </a>
                    <div>
                        <a href="/type/{{ $anime->type_id }}" class="btn btn-warning btn-sm">{{ $anime->type->type }}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection