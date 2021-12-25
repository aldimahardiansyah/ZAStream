@extends('admin.main')
@section('content')
<div class="container">
    <div class="p-1">
        <p></p>
    </div>
    <div class="m-3 shadow p-4 rounded" style="background-color:#fff">
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
                <label for="name" class="col-form-label col-sm-2">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value=" {{ $title=='Edit User'?$genre->genre:'' }}">
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="email" class="col-form-label col-sm-2">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value=" {{ $title=='Edit User'?$genre->genre:'' }}">
                </div>
            </div>
            <div class="mb-3 row-12 d-sm-flex">
                <label for="password" class="col-form-label col-sm-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <input type="reset" class="btn btn-danger m-1" value="Kosongkan Input">
                <input type="submit" class="btn btn-primary m-1">
            </div>
        </form>
    </div>
</div>
@endsection