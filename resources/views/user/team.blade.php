@extends('layouts.navbarbaru')

@section('content')
<style>
    .container-xxl{
    margin-top: 3cm;
    padding: 0;
    min-height: 100vh;
    }
</style>
@section('title', 'Team')
@section('team', 'active')

  <!-- Team Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <p class="d-inline-block border rounded-pill py-1 px-4">Team</p>
              <h1>Our Developer</h1>
          </div>
          <div class="row g-4">
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/team-1.jpg') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>David Satria Alamsyah</h5>
                          <p class="text-primary">220535610311</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-discord"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-github"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/aldy2.jpg') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>Aldy Rahmat Yulianto</h5>
                          <p class="text-primary">220535610051</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-discord"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-github"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/Bima.jpg') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>Bima Ahmadani D H</h5>
                          <p class="text-primary">220535603999</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-discord"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-github"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/wida.jpg') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>Adelia Wida</h5>
                          <p class="text-primary">220535608776</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-discord"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-github"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Team End -->

@endsection
