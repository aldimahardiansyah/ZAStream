@extends('admin.main')
@section('content')
    <div class="content-header container-fluid mb-2 pl-3">
        <h1>Users</h1>
    </div>
    <div class="container">
    <div class="card">
        <div class="card-header d-flex row-12 align-items-center">
          <h3 class="card-title col">{{ $title }}</h3>
          <div class="d-flex justify-content-end w-100 col">
            <a href="/admin/user/add" class="btn btn-primary">Add User</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a href="/admin/user/delete/{{ $user->id }}" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
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