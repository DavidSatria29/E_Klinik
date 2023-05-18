@extends('layouts.navbarbaru')

@section('content')
@section('title', 'Home')
@section('home', 'active')

    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <!-- Pesan Start -->
          @if (session()->has('pesan'))
          <div class="alert alert-success">
            {{ session()->get('pesan') }}
          </div>
          @endif
          <!-- Pesan End -->
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Welcome to E-Klinik</h1>
                <h4 class="display-8 text-white mb-5">Website Pelayanan Kesehatan yang terkini dengan berbagai fitur menarik dan tenaga kesehatan yang terpercaya</h4>
                <a type="button" class="btn btn-light btn-lg col-3 mb-5" href="" style="border-radius: 50px;"><span style="color: blue;"><b>Login</b></span></a>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Total Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('asset/img/carousel-1.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <img class="img-fluid" src="{{ asset('asset/img/logo4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('asset/img/carousel-2.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <img class="img-fluid" src="{{ asset('asset/img/algoritma.png') }}" alt="" style="width: 30%;">
                            <h1 class="display-6 text-white mb-0 text-center">Algoritma Certainty Factor</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('asset/img/carousel-3.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <img class="img-fluid" src="{{ asset('asset/img/app.png') }}" alt="" style="width: 30%;">
                            <h1 class="display-6 text-white mb-0 text-center">Metode RAD <br>(Rapid Application Development)</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

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
                          <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                          <h1 class="text-white mb-4">Why Choose Us</h1>
                          <p class="text-white mb-4 pb-2">Website E-klinik sangat mudah digunakan dan dilengkapi dengan berbagai fitur, sehingga pengguna akan mendapatkan pelayanan kesehatan
                              yang mudah dan cepat serta praktis hanya melalui genggaman tangan mereka. Fitur tersebut diantaranya :</p>
                          <div class="row g-4">
                              <div class="col-md-6">
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
                              <div class="col-md-6">
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
                              <div class="col-md-6">
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
                              <div class="col-md-6">
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
                          <img class="position-absolute img-fluid w-100 h-100" src="{{  asset('asset/img/feature.jpg') }}" style="object-fit: cover;" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  {{-- Features End --}}

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
                <h1>Our Health Care and Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-thermometer text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Demam Berdarah</h4>
                        <p class="mb-4"> Demam berdarah merupakan infeksi yang menyebar melalui nyamuk dan dapat menyebabkan penyakit seperti flu dan demam yang parah.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-toilet text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Diare</h4>
                        <p class="mb-4"> Diare adalah buang air besar encer dengan kuantitas sering. Sebenarnya diare adalah kondisi yang umum dan standarnya hanya terjadi selama beberapa hari</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-bed text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Tipes</h4>
                        <p class="mb-4">Penyakit tipes atau demam tifoid adalah infeksi yang menyerang tubuh disebabkan bakteri Salmonella typhi melalui makanan, minuman dan lingkungan kurang bersih.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-mosquito text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Malaria</h4>
                        <p class="mb-4">Malaria adalah jenis penyakit yang terjadi karena parasit bernama plasmodium. Hingga bisa terjangkit penyakit ini, kamu harus terlebih dahulu digigit oleh nyamuk Anopheles betina yang terinfeksi parasit ini. </p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-bandage text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Maag</h4>
                        <p class="mb-4">Sakit maag atau dispepsia adalah rasa nyeri dan tidak nyaman pada lambung akibat sejumlah kondisi.  Kondisi ini bukan suatu penyakit, melainkan gejala dari penyakit. </p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-viruses text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Flu</h4>
                        <p class="mb-4">Flu atau influenza adalah infeksi virus yang menyerang hidung, tenggorokan, dan paru-paru. Penderita flu dapat mengalami demam, sakit kepala, pilek, hidung tersumbat, serta batuk.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Service End -->


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
                            <h5>Aldy Rahmat Yulianto</h5>
                            <p class="text-primary">220535610051</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-github" title="github"></i></a>
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
                            <h5>Adhelia Wida Khaidir</h5>
                            <p class="text-primary">220535608776</p>
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

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @forelse ($article as $value)
                    <div class="testimonial-item text-center">
                    <img class="img-fluid bg-lighte p-2 mx-auto mb-4" src="{{ asset('asset/img/team-4.jpg') }}" style="width: 200px; height: 200px;">
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
    <!-- Testimonial End -->

    <!-- Article Start -->
    <!-- Article End -->

  {{-- <section id="berita">
    <div class="container" style="margin-bottom: 100px">
      <div class="kami row mt-3 justify-content-center">
        <h1 align="center">Artikel</h1>
        <hr color="blue" size="6px"  align="center">
      </div>
    <div class="row mt-5">
      @forelse ($article as $value)
      <div class="tahu col-lg-4 justify-content-center">
        <div class="card" style="width: 22rem;">
          <img src="{{ $value->image_path }}" class="card-img-top" alt="...">
          <div class="card-body">
              <p class="card-text">{{ $value->title }}</p>
              <a href="{{ route('article.show', ['article'=>$value->id]) }}" class="btn btn-primary btn-sm">Read More</a>
          </div>
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
  --}}

    <!-- Contact us Start -->
    <div class="container-xxl bg-dark py-5" style="margin-bottom: -5%;">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
            <center><p class="d-inline-block border rounded-pill py-1 px-4 text-light">Contact Us</p></center>
              <div class="bg-light rounded h-100 d-flex align-items-center p-5 mb-3">
                  <form style="width: 100%;">
                    <div class="row g-3 justify-content-center">
                      <div class="col-12 col-sm-6">
                        <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                      </div>
                      <div class="col-12 col-sm-6">
                        <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                      </div>
                      <div class="col-12">
                        <textarea class="form-control border-0" rows="15" placeholder="Write Your Message"></textarea>
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
{{--
  <section class="ending mt-5" id="contact">
    <hr color="blue" size="6px"  align="center">
    <h1 class="text-center">Hubungi Kami</h1>
    <div class="container">
      <div class="row mx-auto mt-2">
        <div class="col-lg-12">
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="mt-5 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tulis nama lengkap anda" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">E-mail Address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat E-mail Anda" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Message</label>
              <textarea type="text" class="form-control" name="message" id="exampleFormControlTextarea1" rows="10" placeholder="Tulis pesan anda"></textarea>
            </div>
            <center>
              <div class="mb-5 ">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </div>
  </section>   --}}
@endsection
