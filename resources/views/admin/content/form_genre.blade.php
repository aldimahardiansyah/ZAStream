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
            <div class="mb-3 row-12 d-sm-flex">
                <label for="genre" class="col-form-label col-sm-2">Nama Genre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="genre" name="genre" value=" {{ $title=='Edit Genre'?$genre->genre:'' }}">
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <input type="reset" class="btn btn-danger m-1" value="Kosongkan Input">
                <input type="submit" class="btn btn-primary m-1">
            </div>
        </form>
    </div>
@endsection