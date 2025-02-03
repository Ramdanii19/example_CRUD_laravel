<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>

  <div class="text-center">
    <h2>Login Aplikasi</h2>
    <p>Silahkan Masuk</p>

    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card">
          <div class="card-boy text-start">
            <form action="{{route('login.submit')}}" method="post">
              @csrf
              <input type="email" name="email" class="form-control mb-2">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control mb-2">
              <button class="btn btn-primary">Submit</button>
            </form>

            @if(session('gagal'))
            <p class="text-danger">{{session('gagal')}}</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>