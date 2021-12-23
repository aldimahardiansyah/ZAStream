@extends('admin.main')
@section('content')
    <div class="content-header container-fluid mb-2 pl-3">
        <h1>Genre</h1>
    </div>
    <div class="container">
    <div class="card">
        <div class="card-header d-flex row-12 align-items-center">
          <h3 class="card-title col">{{ $title }}</h3>
          <div class="d-flex justify-content-end w-100 col">
            <a href="/admin/genre/add" class="btn btn-primary">Add Genre</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Genre</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->genre }}</td>
                    <td>
                        <a href="/admin/genre/edit/{{ $genre->id }}" class="btn btn-warning">Edit</a>
                        <a href="/admin/genre/delete/{{ $genre->id }}" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Judul</th>
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