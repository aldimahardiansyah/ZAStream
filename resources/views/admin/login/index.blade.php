<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ZAStream | Admin Login</title>
  </head>
  <body>
    <div class="container-fluid" style="height: 100vh; background-color: #F8F9FA">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <h4 class="text-center mt-4">Admin Login</h4>
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dissmissible fade show d-flex justify-content-between" role="alert">
                        {{ session('loginError') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror
                    <div class="shadow p-3 rounded-3" style="background-color: #fff">
                        <form action="/admin/login" method="post">
                            @csrf
                            <div class="mb-3 row">
                              <label for="email" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus required name="email" id="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="Password" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="Password">
                              </div>
                            </div>

                            <input type="submit" class="btn btn-primary mx-auto d-block" value="Login">
                        </form>
                    </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>