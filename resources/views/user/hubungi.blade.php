@extends('layouts.navbarbaru')

@section('content')
<style>
  .container-hubungi{
  margin-top: 1cm;
  padding: 0;
  min-height: 100vh;
  }
</style>
@section('title', 'Hubungi Kami')
@section('hubungi', 'active')

    <!-- Contact us Start -->
    <div class="container-xxl py-5 container-hubungi" style="margin-bottom: -5%;">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
            <center><p class="d-inline-block border rounded-pill py-1 px-4 text-light bg-dark">Contact Us</p></center>
              <div class="bg-light rounded h-100 d-flex align-items-center p-5 mb-3">
                  <form action="{{ route('contact.store') }}" method="POST" style="width: 100%;">
                    @csrf
                    <div class="row g-3 justify-content-center">
                      <div class="col-12 col-sm-6">
                        <input type="text" class="form-control border-0" placeholder="Your Name" name="name" style="height: 55px;">
                      </div>
                      <div class="col-12 col-sm-6">
                        <input type="email" class="form-control border-0" placeholder="Your Email" name="email" style="height: 55px;">
                      </div>
                      <div class="col-12">
                        <textarea class="form-control border-0" rows="15" placeholder="Write Your Message" name="message"></textarea>
                      </div>
                      <div class="col-12">
                        <center><button class="btn btn-primary w-50 py-3" type="submit">Send Message</button></center>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Contact Us End -->
@endsection