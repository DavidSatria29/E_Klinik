@extends('layouts.master')

@section('content')

<section class="beranda d-flex align-items-center" id="section2">
    <div class="container">
      <div class="row justify-content-center d-flex py-5">
        <div class="isi col-8 col-sm-6 mt-5 ms-5 ">
      @if (session()->has('pesan'))
        <div class="alert alert-success">
          {{ session()->get('pesan') }}
        </div>
      @endif
        <br><br><br><h3 class="mt-5">Welcome To E-Klinik</h3>
          <h6>Website Pelayanan Kesehatan yang terkini dengan berbagai fitur menarik dan tenaga kesehatan yang terpercaya</h6>
          <a type="button" class="btn btn-primary btn-lg mt-2 col-3" href="Login">Login</a><br><br>
        </div>
        <div class="logo col-3 col-sm-5 "><img src="{{ asset('asset\img\logo5.png') }}" class="img-fluid "></div>
      </div>
    </div>
  </section>

  <section id="why-us" class="why-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Kenapa Memilih E-Klinik</h3>
            <p>
              Webite E-klinik sangat mudah digunakan dan dilengkapi dengan berbagai fitur, sehingga pengguna akan mendapatkan pelayanan kesehatan
              yang mudah dan cepat serta praktis hanya melalui genggaman tangan mereka
            </p>
            <div class="text-center">
              <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Tujuan</h4>
                  <p>E-Klinik dibuat untuk memenuhi dan mempermudah kebutuhan pelayanan kesehatan masyarakat</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Fitur</h4>
                  <p>E-Klinik dilengkapi berbagai fitur seperti Live Chat dan Online Presciption. <br>
                    <a href="#fitur">Selengkapnya</a></p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Sistem</h4>
                  <p>Sistem pelayanan E-Klinik dibuat secara dinamis, yang didukung oleh Algoritma Certainty Factor dan Metode Rapid Application Development <br>
                    <a href="#fitur">Selengkapnya</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tentang">
    <div class="container">
      <div class="kami row mt-3 justify-content-center">
        <h1 align="center">About Us</h1>
        <hr color="blue" size="6px" align="center">
      </div>
      <div class="row">
        <div class="gambar col-lg-4 mt-5" data-aos= "flip-left">
          <img src="{{ asset('asset\img\peakp.jpg') }}" class="background-image img-fluid" style="background-size: cover;">
        </div>
        <div class="kartu col-lg-8 mt-5">
          <div class="container">
            
              <div class="tentang row">
                <h5 >Apa itu E-Klinik ?</h5>
                <p class= "mt-3">E-Klinik merupakan sebuah website pelayanan kesehatan yang dinamis 
                  dengan berbagai fitur yang menarik. Terdapat pilihan berbagai pelayanan kesehatan 
                  yang dapat dipilih oleh pengguna sesuai kebutuhan mereka, seperti pelayanan 
                  kesehatan fisik , mental dan lain-lain. Pengguna juga dapat melihat profil para staff, 
                  dokter dan tenaga kesehatan lainnya, yang pastinya telah terakreditasi dan sangat 
                  kompeten dalam bidangnya.</p>
              </div>
    
            <div class="tentang2 row mt-5">
              <div class="icon col-sm-2"><img src="{{ asset('asset\img\algoritma.png') }}" class="background-image img-fluid" style="width: 80%" ></div>
              <div class="col-sm-10">
                <h5>Algoritma Certainty Factor</h5>
                <p>Dalam metode ini, digunakan konsep kepastian yang 
                disebut dengan faktor kepastian <i>(certainty factor) </i> untuk menggambarkan tingkat 
                kepercayaan terhadap suatu hipotesis atau kesimpulan.Kami akan menggunakan metode ini untuk mendiagnosis penyakit umum yang 
                diderita oleh pengguna.</p>
              </div>
            </div>
            <div class="tentang2 row mt-5">
              <div class="icon col-sm-2"><img src="{{ asset('asset\img\mobile.png') }}" class="background-image img-fluid" style="width: 80% "></div>
              <div class="col-sm-10">
                <h5>Metode RAD (Rapid Application Development)</h5>
                <p>RAD <i>(Rapid Application Development)</i>  adalah metode pengembangan perangkat 
                lunak yang memfokuskan pada pengembangan produk secara cepat dengan 
                melibatkan pengguna aktif dalam seluruh tahapan pengembangan, seperti planning, 
                user design, construction, testing, deployment, dan maintenance.</p></div>
            </div>
          </div>
        </div>
          </div>
    </div>
  </section>

 <section id="fitur">
  <div class="container">
    <div class="row">
      <div class="fitur row mt-5 justify-content-center">
        <h1 align="center">Feature</h1>
        <hr color="blue" size="6px"  align="center">
      </div>
      <div class="col-12 col-sm-12">
        <div id="scene">
          <div id="left-zone">
              <ul class="list">
                  <li class="item"><input type="radio" id="Chat" name="basic_carousel" value="Chat" checked="checked" />
                    <label class="label_chat" for="Chat">Live Chat</label>
                      <div class="content content_chat"><span class="picto"></span>
                          <h1>Live Chat</h1>
                          <p >Fitur ini memungkinkan pengguna untuk berkomunikasi dan mengkonsultasikan keluhan mereka kepada para dokter 
                            secara online melalui handphone, laptop ataupun komputer tanpa menemui mereka secara langsung
                          </p>
                      </div>
                  </li>
                  <li class="item"><input type="radio" id="drug" name="basic_carousel" value="drug" />
                    <label class="label_pharmacy" for="drug">Online Presciption</label>
                      <div class="content content_drug"><span class="picto"></span>
                          <h1>Online Presciption</h1>
                          <p>E-klinik memiliki agen apotek terpecaya dan kredibel. Fitur ini memungkinkan pengguna untuk mendapatkan resep
                            obat sesuai diagnosa dan keluhan penyakit yang dialami secara otomatis dan cepat, dan tentunya melalui persetujuan 
                            dokter
                          </p>
                      </div>
                  </li>
                  <li class="item"><input type="radio" id="diagnose." name="basic_carousel" value="diagnose" />
                    <label class="label_check" for="diagnose.">Health Check</label>`
                      <div class="content content_check"><span class="picto"></span>
                          <h1>Health Check</h1>
                          <p>Dengan adanya algoritma <i>Certainty Factor</i>, fitur cek kesehatan dapat memungkinkan pengguna untuk
                          menggambarkan berbagai keluhan-keluhan yang dialaminya dan sistem pun akan melakukan diagnosa secara otomatis.</p>
                      </div>
                  </li>
                  <li class="item">
                    <input type="radio" id="delivery" name="basic_carousel" value="delivery" />
                    <label class="label_deliv" for="delivery">Medicine Delivery</label>
                      <div class="content content_deliv"><span class="picto"></span>
                          <h1>Medicine Delivery</h1>
                          <p>Fitur ini memungkinkan pengguna untuk memesan dan menerima obat yang telah dipesan sesuai resep dan diagnosa
                            yang telah diberikan
                          </p>
                      </div>
                  </li>
              </ul>
          </div>
          <div id="middle-border"></div>
          <div id="right-zone"></div>
      </div>
      </div>
    </div>
  </div>

</section>
  <section id="berita">
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
    <div class="row mt-5 justify-content-center">
  </div>
  <div class="row mt-3">
    <div class="tahu col-lg-4 justify-content-center">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('asset\img\article4.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">8 Gejala Batu Ginjal yang Tak Boleh Disepelekan</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
         </div>
      </div>
    </div>
    <div class="tahu col-lg-4 justify-content-center">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('asset\img\article5.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Cara Terapi Uap untuk Mengencerkan Lendir di Paru-paru</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
         </div>
      </div>
    </div>
    <div class="tahu col-lg-4 justify-content-center">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('asset\img\article6.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Studi Temukan Gula Nol Kalori Tak Selalu Sehat, Bisa Picu Stroke</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
         </div>
      </div>
    </div>
  </div>
    </div>
  </section>
  
  <section class="ending mt-5" id="contact">

    <div class="container">
      <div class="row mx-auto mt-5">
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
  </section>  
@endsection
