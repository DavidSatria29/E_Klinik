<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield ('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- icon -->
    <link href="{{ asset('asset/img/logo6.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- ssszxasssssssIcon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/user/bootstrapV5_0.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('asset/css/user/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/user/article.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/user/slide.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/master.css') }}" rel="stylesheet" >



    
</head>
    

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>E-Klinik</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            {{-- <div class="navbar-nav ms-auto p-4 p-lg-0">
                <div class="nav-item dropdown"> --}}
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link @yield('home')" aria-current="page" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item dropdown">
                      <a href="{{ route('home') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman Lain</a>
                      <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                            <a href="{{ route('about') }}" class="dropdown-item @yield('tentang kami')">Tentang Kami</a>
                            <a href="{{ route('service') }}" class="dropdown-item @yield('pelayanan')">Pelayanan</a>
                            <a href="{{ route('artikel') }}" class="dropdown-item @yield('artikel')">Artikel</a>
                            <a href="{{ route('hubungi') }}" class="dropdown-item @yield('hubungi')">Hubungi Kami</a>
                            <a href="{{ route('team') }}" class="dropdown-item @yield('team')">Teams</a>
                        </div>
                    </li>
                {{-- </div> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('home') }} " data-bs-toggle="dropdown">Chat Dokter</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                            <a href="{{ route('chat') }}" class="dropdown-item @yield('chat')">Chat Baru</a>
                            @if (Auth::check())
                                <a href="{{ route('chat.show', ['chat'=> Auth::user()->email]) }}" class="dropdown-item @yield('chatShow')">Lihat Chat</a>                                
                            @endif
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link @yield('cek')" aria-current="page" href="{{ route('check') }}">Periksa Penyakit</a></li>
                  </ul>
                {{-- <a href="/chat" class="nav-item nav-link @yield('chat')">Chat Dokter</a> --}}
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
                              Selamat Datang, {{ Auth::user()->name }}
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
    <!-- Navbar End -->

@yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn footerr" data-wow-delay="0.1s">
        <div class="container d-flex flex-column">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start mb-2 mb-md-0">
                        <p class="">Copyright&copy; E-Klinik, All Right Reserved.</p>
                    </div>
                    <div class="col-md-4 text-center text-md-center mb-2 mb-md-0">
                        <a class="btn btn-square d-inline" href=""><i class="fab fa-at"></i></a>
                        <a class="btn btn-square d-inline px-2" href=""><i class="fa fa-map-location-dot"></i></a>
                        <a class="btn btn-square d-inline" href="https://instagram.com/ekli.nik?igshid=ZGUzMzM3NWJiOQ=="><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-md-4 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p class="">Designed By E-Klinik Team</p>
                        <p class="">{{ date("l, d M Y") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('asset/js/user/JqueryV4_1.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap/bootstrap.V5_0.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('asset/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('asset/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/user/main.js') }}"></script>
    <script src="{{ asset('asset/js/user/article.js') }}"></script>


    @include('sweetalert::alert')
</body>

</html>