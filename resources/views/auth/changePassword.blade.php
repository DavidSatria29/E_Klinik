@extends('layouts.authMaster')

@section('title', 'Change Password')
@section('content')
    <!----------------------- Main Container -------------------------->
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-2">
    
        <!----------------------- Login Container -------------------------->
    
           <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
    
           <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #a0b3ea;">
               <div class="featured-image mb-3">
                <img src="{{ asset('asset/img/logo6.png') }}" class="img-fluid" style="width: 250px;">
               </div>
               <p class="text-white fs-2 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Selamat Datang di Website E-Klinik</p>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Silahkan daftar terlebih dahulu</small>
           </div> 
    
        <!-------------------- ------ Right Box ---------------------------->
            
           <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2 class="text-center">Ganti Password</h2>
                    </div>
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
                        <div class="input-group mb-1">
                            <input type="email" class="form-control form-control-lg bg-light fs-6 @error('oldEmail') is-invalid @enderror" value="{{ old('oldEmail') }}" id="oldEmail" placeholder="Email Lama" name="oldEmail" autofocus>
                            @error('oldEmail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-inline-block mt-0">
                            <small id="pesanOld"></small>
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" class="form-control form-control-lg bg-light fs-6 @error('newPassword') is-invalid @enderror" value="{{ old('newPassword') }}" id="newPassword" placeholder="Password Baru" name="newPassword"  autofocus>
                            @error('newPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-inline-block mt-0">
                            <small id="pesanNew"></small>
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" class="form-control form-control-lg bg-light fs-6 @error('passwordConfirmation') is-invalid @enderror" placeholder="Konfirmasi Password Baru" id="confirm-password" name="passwordConfirmation" >
                            @error('passwordConfirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <small id="pesanConfirm" class="d-inline-block mt-0"></small>
                        </div>
                        <div class=" input-group mb-3 d-flex justify-content-center mt-2">
                            <div class="justify-content-center">
                                <button type="submit" class="btn btn-primary align-center" id="tombol">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-1">
                        <a href="{{ route('login') }}">Kembali</a>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <script src="{{ asset('asset/js/Query.js') }}"></script>
        <script src="{{ asset('asset/js/changePassword.js') }}"></script>
@endsection