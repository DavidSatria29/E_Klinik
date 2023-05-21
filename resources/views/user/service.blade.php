@extends('layouts.master')

@section('title', 'Pelayanan')
@section('pelayanan', 'active')
@section('content')
         <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Layanan</p>
                <h1>Daftar Penyakit Yang Diperiksa</h1>
            </div>
            <div class="row g-4">
                @foreach ($deskripsiPenyakit as $deskripsi)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="{{ $deskripsi->icon }} text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">{{ $deskripsi->nama_penyakit }}</h4>
                        <a class="btn" href="{{ route('penyakit.show', ['deskripsi'=>$deskripsi->id]) }}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <!-- Service End -->

@endsection