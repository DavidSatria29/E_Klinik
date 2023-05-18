@extends('layouts.navbarbaru')

@section('content')
@section('title', 'About Us')
@section('about', 'active')

  <!-- About Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <div class="d-flex flex-column">
                      <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('asset/img/about-1.jpg') }}" alt="">
                      <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('asset/img/about-2.jpg') }}" alt="" style="margin-top: -25%;">
                      <img class="img-fluid rounded w-50 bg-white pt-3 pe-2 align-self-end" src="{{ asset('asset/img/team-2.jpg') }}" alt="" style="margin-top: -25%;">
                  </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                  <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                  <p>E-Klinik merupakan sebuah website pelayanan kesehatan yang dinamis 
                      dengan berbagai fitur yang menarik. Terdapat pilihan berbagai pelayanan kesehatan 
                      yang dapat dipilih oleh pengguna sesuai kebutuhan mereka, seperti pelayanan 
                      kesehatan fisik , mental dan lain-lain. Pengguna juga dapat melihat profil para staff, 
                      dokter dan tenaga kesehatan lainnya, yang pastinya telah terakreditasi dan sangat 
                      kompeten dalam bidangnya</p>
                  <p><i class="far fa-check-circle text-primary me-3"></i><b>Certainty Factor</b>
                     <div class="row ms-4">
                      <div class="col-12">
                          <p>Dalam metode ini, digunakan konsep kepastian yang 
                              disebut dengan faktor kepastian <i>(certainty factor) </i> untuk menggambarkan tingkat 
                              kepercayaan terhadap suatu hipotesis atau kesimpulan.Kami akan menggunakan metode ini untuk mendiagnosis penyakit umum yang 
                              diderita oleh pengguna.
                           </p>
                      </div>
                     </div>
                  </p>
                  <p><i class="far fa-check-circle text-primary me-3"></i><b>Rapid Application Development</b>
                      <div class="row ms-4">
                          <div class="col-12">
                              <p>RAD <i>(Rapid Application Development)</i>  adalah metode pengembangan perangkat 
                                  lunak yang memfokuskan pada pengembangan produk secara cepat dengan 
                                  melibatkan pengguna aktif dalam seluruh tahapan pengembangan, seperti planning, 
                                  user design, construction, testing, deployment, dan maintenance.
                               </p>
                          </div>
                      </div>
                  </p>
                  <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->


  <!-- Feature Start -->
  <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
      <div class="container feature px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                  <div class="p-lg-5 ps-lg-0">
                      <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features and Services</p>
                      <h1 class="text-white mb-4">Why Choose Us</h1>
                      <p class="text-white mb-4 pb-2">Website E-klinik sangat mudah digunakan dan dilengkapi dengan berbagai fitur, sehingga pengguna akan mendapatkan pelayanan kesehatan
                          yang mudah dan cepat serta praktis hanya melalui genggaman tangan mereka. Fitur tersebut diantaranya :</p>
                      <div class="row g-4">
                          <div class="col-6">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                      <i class="fa fa-notes-medical text-primary"></i>
                                  </div>
                                  <div class="ms-4">
                                      <p class="text-white mb-2">Health</p>
                                      <h5 class="text-white mb-0">Check</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                      <i class="fa fa-prescription-bottle text-primary"></i>
                                  </div>
                                  <div class="ms-4">
                                      <p class="text-white mb-2">Online</p>
                                      <h5 class="text-white mb-0">Presciption</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                      <i class="fa fa-comment-medical text-primary"></i>
                                  </div>
                                  <div class="ms-4">
                                      <p class="text-white mb-2">Live</p>
                                      <h5 class="text-white mb-0">Chat</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                      <i class="fa fa-truck text-primary"></i>
                                  </div>
                                  <div class="ms-4">
                                      <p class="text-white mb-2">Medicine</p>
                                      <h5 class="text-white mb-0">Delivery</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('asset/img/feature.jpg') }}" style="object-fit: cover;" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Feature End -->


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
                          <p class="text-primary">2205356</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/team-2.jpg') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>Aldy Rahmat Putra</h5>
                          <p class="text-primary">2205356</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
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
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/team-4.jpg') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>Adelia Wida</h5>
                          <p class="text-primary">2205356</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
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
