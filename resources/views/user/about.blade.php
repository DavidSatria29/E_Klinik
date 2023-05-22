@extends('layouts.master')

@section('content')
@section('title', 'tentang kami')
@section('tentang kami', 'active')

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
                    <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                    <h1 class="mb-4">Mengapa Anda Harus Mempercayai Kami? Kenali Tentang Kami!</h1>
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
                    <p><i class="far fa-check-circle text-primary me-3"></i><b>Chat Dokter</b>
                        <div class="row ms-4">
                            <div class="col-12">
                                <p><i>(Chat Dokter)</i>  adalah salah satu fitur unggulan yang memiliki layanan yang memungkinkan pengguna untuk berkomunikasi langsung dengan dokter secara online. Melalui chat, pengguna dapat mengajukan pertanyaan, menggambarkan gejala atau masalah kesehatan yang mereka alami, dan meminta saran medis dari dokter yang kompeten. 
                                    Dengan fitur ini, pengguna dapat mendapatkan informasi kesehatan yang akurat, konsultasi medis, dan panduan pengobatan dengan cepat dan mudah tanpa perlu menunggu antrian atau melakukan perjalanan jauh. Fitur Chat Dokter juga memungkinkan dokter untuk memberikan penjelasan rinci tentang kondisi kesehatan, melakukan diagnosa awal, serta memberikan saran dan rekomendasi yang sesuai. 
                                    Dengan demikian, fitur ini memberikan aksesibilitas yang lebih besar dan meningkatkan kenyamanan dalam mendapatkan perawatan kesehatan.
                                 </p>
                            </div>
                        </div>
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3 " href="{{ route('aboutCF') }}">Read More</a>
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
                          <p class="d-inline-block border rounded-pill text-light py-1 px-4">Fitur</p>
                          <h1 class="text-white mb-4">Mengapa Memilih Kami?</h1>
                          <p class="text-white mb-4 pb-2">Website E-klinik sangat mudah digunakan dan dilengkapi dengan berbagai fitur, sehingga pengguna akan mendapatkan pelayanan kesehatan
                              yang mudah dan cepat serta praktis hanya melalui genggaman tangan mereka. Fitur tersebut diantaranya :</p>
                          <div class="row g-4">
                              <div class="col-md-6">
                                  <div class="d-flex align-items-center">
                                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                          <i class="fa fa-notes-medical text-primary"></i>
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-white mb-2">Periksa</p>
                                          <h5 class="text-white mb-0">Penyakit</h5>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="d-flex align-items-center">
                                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                          <i class="fa fa-prescription-bottle text-primary"></i>
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-white mb-2">Chat</p>
                                          <h5 class="text-white mb-0">Dokter</h5>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="d-flex align-items-center">
                                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                          <i class="fa fa-comment-medical text-primary"></i>
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-white mb-2">Saran</p>
                                          <h5 class="text-white mb-0">Pencegahan</h5>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="d-flex align-items-center">
                                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                          <i class="fa fa-truck text-primary"></i>
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-white mb-2">Saran</p>
                                          <h5 class="text-white mb-0">Obat</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                      <div class="position-relative h-100">
                          <img class="position-absolute img-fluid w-100 h-100" src="{{  asset('asset/img/feature.jpg') }}" style="object-fit: cover;" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  {{-- Features End --}}


  <!-- Team Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <p class="d-inline-block border rounded-pill py-1 px-4">Team</p>
              <h1>Team E-Klinik</h1>
          </div>
          <div class="row g-4">
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/David.png') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>David Satria Alamsyah</h5>
                          <p class="text-primary">220535610311</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href="https://discordapp.com/users/David%20Alamsyah#2153"><i class="fab fa-discord" title="discord"></i></a>
                              <a class="btn btn-square" href="https://github.com/DavidSatria29"><i class="fab fa-github" title="github"></i></a>
                              <a class="btn btn-square" href="https://instagram.com/david_alamsyahh/"><i class="fab fa-instagram" title="instagram"></i></a>
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
                              <a class="btn btn-square" href="https://discord.com/users/310751897680216085"><i class="fab fa-discord" title="discord"></i></a>
                              <a class="btn btn-square" href="https://github.com/AldyRahmatY"><i class="fab fa-github" title="github"></i></a>
                              <a class="btn btn-square" href="https://www.instagram.com/aldyrahmat_/"><i class="fab fa-instagram" title="instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="team-item position-relative rounded overflow-hidden">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{ asset('asset/img/bima.png') }}" alt="">
                      </div>
                      <div class="team-text bg-light text-center p-4">
                          <h5>Bima Ahmadani D H</h5>
                          <p class="text-primary">220535603999</p>
                          <div class="team-social text-center">
                              <a class="btn btn-square" href="http://discordapp.com/users/Noobman#3481"><i class="fab fa-discord" title="discord"></i></a>
                              <a class="btn btn-square" href="https://github.com/Bimaahmadani"><i class="fab fa-github" title="github"></i></a>
                              <a class="btn btn-square" href="https://www.instagram.com/bimajugamanusia/"><i class="fab fa-instagram" title="instagram"></i></a>
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
                              <a class="btn btn-square" href="http://discordapp.com/users/AdheliaWida#8727"><i class="fab fa-discord" title="discord"></i></a>
                              <a class="btn btn-square" href="https://github.com/AdheliaWida"><i class="fab fa-github" title="github"></i></a>
                              <a class="btn btn-square" href="https://www.instagram.com/adhelia_wida/"><i class="fab fa-instagram" title="instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Team End -->

@endsection
