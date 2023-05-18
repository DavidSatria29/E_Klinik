@extends('layouts.navbarbaru')

@section('content')
@section('title', 'Services')
@section('service', 'active')

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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset('asset/img/sholum.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>E-klinik sangat memudahkan saya untuk berkonsultasi dengan doktor mengenai penyakit-penyakit yang pernah alami tanpa perlu mendatangi mereka langsung. Sayapun dapat melakukan
                            konsultasi sembari melakukan aktivitas rutin saya
                        </p>
                        <h5 class="mb-1">Abdullah Sholum</h5>
                        <span class="fst-italic">Penggaccha Handal</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset('asset/img/Enanto.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Para dokter yang melayani sangat ramah dan kompeten. Penjelasan mereka pun sangat mudah dipahami</p>
                        <h5 class="mb-1">Enanto Harun Satrio</h5>
                        <span class="fst-italic">Pembuat Stiker</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset('asset/img/Ardha.jpg') }}" style="width: 100px; height: 100px;">
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
