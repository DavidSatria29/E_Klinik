@extends('layouts.navbarbaru')
<style>
    .container-xxl{
    margin-top: 3cm;
    padding: 0;
    min-height: 100vh;
    }
  </style>
@section('content')
     <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">Maaf, halaman yang Anda cari tidak ada di situs web kami! Mungkin buka beranda kami atau coba gunakan pencarian?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('home') }}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection