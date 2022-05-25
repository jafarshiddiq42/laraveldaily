<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @yield('navmhs')" aria-current="page" href="{{route('mahasiswa')}}">mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" @yield('navjur') href="{{route('jurusan')}}">jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" @yield('navgal') href="{{route('galeri')}}">galeri</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>