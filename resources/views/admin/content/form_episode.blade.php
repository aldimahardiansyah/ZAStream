@extends('main')
@section('content')
<div class="container shadow p-4 rounded">
        <h3 class="mb-4"><i class="fa fa-plus-circle mx-3 text-warning"></i> {{ $title }}</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ $action }}" method="post">
            @csrf
            <div class="row-12 mb-3 d-sm-flex">
                <label class="col-sm-2" for="anime_id">Anime</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="anime_id">
                        @foreach ($animes as $anime)
                            <option value="{{ $anime->id }}" {{ $title=='Edit Episode'&&$anime->type_id==$anime->id?'selected':'' }}>{{ $anime->judul }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="episode" class="col-form-label col-sm-2">Episode ke</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="episode" name="episode" value=" {{ $title=='Edit Episode'?$episode->episode:'' }}">
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="link" class="col-form-label col-sm-2">Link</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="link" name="link" value=" {{ $title=='Edit Episode'?$episode->link:'' }}">
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <input type="reset" class="btn btn-danger m-1" value="Kosongkan Input">
                <input type="submit" class="btn btn-primary m-1">
            </div>
        </form>
    </div>
@endsection