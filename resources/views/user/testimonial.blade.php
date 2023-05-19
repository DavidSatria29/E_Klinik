@extends('layouts.navbarbaru')

@section('content')
<style>
    .container_testi{
    margin-top: 1cm;
    padding: 0;
    min-height: 100vh;
    }
  </style>
@section('title', 'Testimonial')
@section('testimoni', 'active')

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 container_testi">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Artikel</p>
                    <h1>Berita terkini dan akurat</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @forelse ($article as $value)
                        <div class="testimonial-item text-center">
                        <img class="img-fluid bg-lighte p-2 mx-auto mb-4" src="{{ asset('asset/img/artikel/'.$value->image_path) }}" style="width: 200px; height: 200px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <h5 class="mb-1">{{ $value->title }}</h5>
                            <a href="{{ route('article.show', ['article'=>$value->id]) }}" class="btn btn-success btn-sm">Read More</a>
                        </div>
                        </div>
                    @empty
                    <div class="tahu col-lg-4 justify-content-center">
                        <div class="card" style="width: 22rem;">
                        <div class="card-body">
                            <p class="card-text">Tidak ada data</p>
                        </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
