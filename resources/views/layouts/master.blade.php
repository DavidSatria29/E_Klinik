<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'E-Klinik') }}</title>
    <link href="{{ asset('asset/css/master.css') }}" rel="stylesheet" >
    <link href="{{ asset('asset/css/bootsrap/bootstrap.css') }}" rel="stylesheet" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
  <div id="app">
      <nav class="navbar fixed-top shadow navbar-expand-lg " style="background-color: #ffffff">
          <div class="container">
            <a class="navbar-brand rounded mr-auto" href="#">E-KLINIK</a>
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
                <li class="nav-item"><a type="button" class="btn btn-primary" href="" style="border-radius: 23px; margin-left: 20px">Cek penyakit</a></li>
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
                                  {{ Auth::user()->name }}
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
{{-- <body>
    <section class="navigasi">
      <nav class="navbar fixed-top shadow navbar-expand-lg " style="background-color: #ffffff">
        <div class="container-fluid justify-content-center">
          <a class="navbar-brand rounded mr-auto" href="#">E-KLINIK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent " aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            
    <!-- Right Side Of Navbar -->
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link scroll" aria-current="page" href="#section2">Beranda</a></li>
                  <li class="nav-item"><a class="nav-link scroll" href="#tentang">About Us</a></li>
                  <li class="nav-item"><a class="nav-link scroll" href="#berita">Artikel</a></li>
                  <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
                  <li class="nav-item"><a class="nav-link scroll" href="#fitur">Feature</a></li>
                  <li class="nav-item"><a type="button" class="btn btn-primary me-auto" href="" style="border-radius: 23px; margin-left: 20px">Cek penyakit</a></li>
          </ul>
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
                        {{ Auth::user()->name }}
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
  </section> --}}

@yield('content')

    <footer class="kaki text-white">
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

    </body>
</html>