@extends('main')
@section('content')
    <div class="container shadow p-4 rounded">
        <h3 class="mb-4 mx-sm-5">Tambah Anime Baru</h3>
        <form action="/create" method="post">
            <div class="mb-3 row-12 d-sm-flex">
                <label for="judul" class="col-form-label col-sm-2">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="sinopsis" class="col-form-label col-sm-2">Sinopsis</label>
                <div class="col-sm-10">
                    <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="rating" class="col-form-label col-sm-2">Rating</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="ex: 8.1" id="rating" name="rating">
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="cover_img" class="col-form-label col-sm-2">Thumbnail</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="cover_img" name="cover_img">
                </div>
            </div>
            <div class="row-12 mb-3 d-sm-flex">
                <label class="col-sm-2" for="status">Status</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="status">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->status }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row-12 mb-3 d-sm-flex">
                <label class="col-sm-2" for="type">Tipe</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="type">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row-12 d-sm-flex mb-3">
                <label class="col-2">Genre</label>
                <div class="col-10">
                    @foreach ($genres as $genre)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="{{ $genre->id }}" id="{{ $genre->genre }}" name="genre">
                            <label for="{{ $genre->genre }}" class="form-check-label">{{ $genre->genre }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <input type="reset" class="btn btn-danger m-1" value="Kosongkan Form">
                <input type="submit" class="btn btn-primary m-1">
            </div>
        </form>
    </div>
@endsection