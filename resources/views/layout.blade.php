<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>
  <h1 class="text-center mt-3">CRUD Siswa</h1>
  @if(Auth::check())
  <div class="text-center">
    <b>Hallo {{Auth::user()->name}}, anda sudah login</b>
    <button class="btn btn-danger btn-sm">
      <a href="{{route('logout')}}" class="text-decoration-none text-white">Logout</a>
    </button>
  </div>
  @endif
  <div class="mt-3 container">
    @yield('konten')
  </div>
</body>

</html>