@extends('layouts.navbarbaru')

@section('content')
<style>
    .container_testi{
    margin-top: 3cm;
    padding: 0;
    min-height: 100vh;
    }
  </style>
@section('title', 'Testimonial')
@section('testimoni', 'active')

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 container_testi">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{  asset('asset/img/sholum.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>E-klinik sangat memudahkan saya untuk berkonsultasi dengan doktor mengenai penyakit-penyakit yang pernah alami tanpa perlu mendatangi mereka langsung. Sayapun dapat melakukan
                            konsultasi sembari melakukan aktivitas rutin saya
                        </p>
                        <h5 class="mb-1">Abdullah Sholum</h5>
                        <span class="fst-italic">Penggaccha Handal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{  asset('asset/img/Enanto.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Para dokter yang melayani sangat ramah dan kompeten. Penjelasan mereka pun sangat mudah dipahami</p>
                        <h5 class="mb-1">Enanto Harun Satrio</h5>
                        <span class="fst-italic">Pembuat Stiker</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{  asset('asset/img/Ardha.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Aplikasi E-Klinik ini sangat praktis, dan mudah untuk digunakan</p>
                        <h5 class="mb-1">Ardha</h5>
                        <span class="fst-italic">Gamer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
