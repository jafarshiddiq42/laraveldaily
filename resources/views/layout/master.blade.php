<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','sistem informasi mahasiswa')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @yield('navmhs')" aria-current="page" href="/mahasiswa">mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('navdos')"  href="/dosen">dosen</a>
              <li class="nav-item">
                <a class="nav-link @yield('navjur')"  href="/jurusan ">jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('navgal')"  href="#">galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('navber')"  href="/uploadberkas">berkas</a>
              </li>
            </ul>
          </div>
        
        </div>
      </nav>
      @yield('content')
      
      <footer class="bg-dark text-white py-0 fixed-bottom">
        <div class="container" style="float: left">
sistem informasi mahasiswa | copyright @ {{date('Y')}} muhammad haykal
        </div>
</footer>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>