<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-KLINIK</title>
    <link href="{{ asset('asset/css/master.css') }}" rel="stylesheet" >
    <link href="{{ asset('asset/css/bootsrap/bootstrap.css') }}" rel="stylesheet" >
    <link href="{{ asset('asset/img/logo4.png') }}" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <div id="app">
      <nav class="navbar fixed-top shadow navbar-expand-lg " style="background-color: #ffffff">
          <div class="container">
            <a class="navbar-brand rounded mr-auto" href="{{ route('home') }}">E-KLINIK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link scroll" aria-current="page" href="#section2">Beranda</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#tentang">About Us</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#berita">Artikel</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#fitur">Feature</a></li>
                <li class="nav-item"><a type="button" class="btn btn-primary" href="{{ route('check') }}" style="border-radius: 23px; margin-left: 20px">Cek penyakit</a></li>
                <li class="nav-item"><a type="button" class="btn btn-primary" href="{{ route('chat') }}" style="border-radius: 23px; margin-left: 20px">Chat Dokter</a></li>
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  HI,{{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
@yield('content')

<footer class=" text-white" style="background-color: blue;">
    <div class="container">
      <div class="row">
        <div class="kopirek col-sm-6 mt-3 mb-3">
          Copyright &copy <b>E-Klinik</b><br>
          <a>Design By <span style="color: aqua">Kelompok 3</span></a>
        </div>
        <div class="hari col-sm-6 mt-3 " align="right">
          {{ date("l, d M Y") }}
        </div>
      </div>
    </div>
  </footer> 
      <script src="{{ asset('asset/js/Query.js') }}"></script>
      <script src="{{ asset('asset/js//bootsrap/bootsrap.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html>