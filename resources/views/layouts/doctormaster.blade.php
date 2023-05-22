<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!--     Logo     -->
  <link href="{{ asset('asset/img/logo4.png') }}" rel="icon">
  <!-- Nucleo Icons -->
  <link href="{{ asset('asset/css/admin/nucleo-icons.css" rel="stylesheet') }}" />
  <link href="{{ asset('asset/css/admin/nucleo-svg.css" rel="stylesheet') }}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('asset/css/admin/nucleo-svg.css" rel="stylesheet') }}" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('asset/css/admin/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />

</head>
<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
          <span class="ms-1 font-weight-bold">Halaman Dokter</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @yield('Dashboard')" href="/doctor">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <title>Dashboard Doctor</title>
                        <path d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/></svg></div>
              <span class="nav-link-text ms-1">Dashboard Dokter</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link @yield('Chat')" href="/doctor/chat">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <title>Chat Dokter</title>
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
              </div>
              <span class="nav-link-text ms-1">Chat Dokter Data</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link @yield('penyakit')" href="/doctor/penyakit">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <title>Deskripsi Penyakit</title>
                        <path d="M236.4 61.4L227 75.5c-21.3 32-59.4 48.5-97.3 42.1l-59.6-9.9C33.4 101.6 0 129.9 .1 167.1c0 15.9 6.4 31.2 17.6 42.5l29.2 29.2c11 11 17.2 25.9 17.2 41.5c0 15.8-6.4 30.9-17.7 42L33.3 335.1C22.2 345.9 16 360.7 16 376.2c0 36.8 34.1 64.2 70.1 56.2l62.3-13.8c7.7-1.7 15.7-2.6 23.6-2.6h10c27.2 0 53.7 9.3 75 26.3L287.8 467c10.5 8.4 23.6 13 37 13c32.7 0 59.3-26.5 59.3-59.3l0-25.2c0-34.9 21.4-66.2 53.9-78.8l36.9-14.3c22.4-8.7 37.2-30.3 37.2-54.3c0-28.1-20.1-52.3-47.8-57.3l-28-5.1c-36.5-6.7-65.4-34.5-73.6-70.7l-7.1-31.5C348.9 53.4 322.1 32 291.3 32c-22 0-42.6 11-54.9 29.4zM160 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 16a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm0 80a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                      </div>
              <span class="nav-link-text ms-1">Deskripsi Penyakit</span>
            </a>
          </li>


        </ul>
      </div>
      <div class="sidenav-footer mx-3 ">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
          <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
        </div>
        <a class="btn bg-gradient-danger mt-4 w-100" href="/" type="button">kembali ke home</a>
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                @guest
                  @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none">Login</span>
                    </a>
                  @endif

                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none">Register</span>
                    </a>
                  @endif
              @else
                <a href="" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Selamat Datang, {{ Auth::user()->name }}</span>
                </a>
                <a href="{{ route('logout') }}" class="nav-link text-danger font-weight-bold px-0 ms-2"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <span class="d-sm-inline d-none">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              @endguest
          </div>
        </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
@yield('content')
    <script src="{{ asset('asset/js/Query.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/admin/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/admin/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('asset/js/admin/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('asset/js/admin/soft-ui-dashboard.min.js') }}"></script>
    @include('sweetalert::alert')
    </body>
</html>