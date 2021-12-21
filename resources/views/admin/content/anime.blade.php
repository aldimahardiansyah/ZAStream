<?php
$i = 1;
?>
@extends('admin.main')
@section('content')
    <div class="content-header container-fluid mb-2 pl-3">
        <h1>Anime</h1>
    </div>
    <div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h3 class="card-title">Manage Data Anime</h3>
          <a href="/admin/add" class="btn btn-primary">Add Anime</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>NO</th>
              <th>Judul</th>
              <th>Thumbnail</th>
              <th>Sinopsis</th>
              <th>Status</th>
              <th>Rate</th>
              <th>Tipe</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($animes as $anime)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $anime->judul }}</td>
                    <td><img src="{{ $anime->cover_img }}" alt="{{ $anime->cover_img }}" width="87px"></td>
                    <td>{{ $anime->sinopsis }}</td>
                    <td>{{ $anime->status->status }}</td>
                    <td>{{ $anime->rating }}</td>
                    <td>{{ $anime->type->type }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="/anime/delete/{{ $anime->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>NO</th>
                <th>Judul</th>
                <th>Thumbnail</th>
                <th>Sinopsis</th>
                <th>Status</th>
                <th>Rate</th>
                <th>Tipe</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
      @endsection