@extends('admin.main')
@section('content')
    <div class="content-header container-fluid mb-2 pl-3">
        <h1>Episode</h1>
    </div>
    <div class="container">
    <div class="card">
        <div class="card-header d-flex row-12 align-items-center">
          <h3 class="card-title col">{{ $title }}</h3>
          <div class="d-flex justify-content-end w-100 col">
            <a href="/admin/episode/add" class="btn btn-primary">Add Episode</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Judul Anime</th>
              <th>Episode</th>
              <th>Link</th>
              <th>Last Modified</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($episodes as $episode)
                <tr>
                    <td>{{ $episode->id }}</td>
                    <td>{{ $episode->anime->judul }}</td>
                    <td>{{ $episode->episode }}</td>
                    <td>{{ $episode->link }}</td>
                    <td>{{ $episode->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="/admin/episode/edit/{{ $episode->id }}" class="btn btn-warning">Edit</a>
                        <a href="/admin/episode/delete/{{ $episode->id }}" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Judul Anime</th>
              <th>Episode</th>
              <th>Link</th>
              <th>Last Modified</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <script>
      var msg = '{{Session::get('jsAlert')}}';
      var exist = '{{Session::has('jsAlert')}}';
      if(exist){
        alert(msg);
      }
    </script>
      @endsection