@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
<!----------------------- Main Container -------------------------->

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
           <div class="featured-image mb-3">
            <img src="{{ asset('asset/img/1.png') }}" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Hello,Again</h2>
                    <p>We are happy to have you back.</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf 
                    <div class="input-group mb-1">
                        <input type="text" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="LoginEmail" placeholder="Email address" name="email" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                        <div class="d-inline-block mt-0">
                            <small id="pesanEmail"></small>
                        </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" placeholder="Password" id="LogPass" name="password" required autocomplete="current-password" >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                        <div>
                            <small id="PesanPassword" class="d-inline-block mt-0"></small>
                        </div>
                    <div class="input-group mb-2 d-flex justify-content-between ms-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="form-check-label text-secondary"><small>{{ __('Remember Me') }}</small></label>
                        </div>
                    </div>
                    <div class=" input-group mb-3 d-flex justify-content-between">
                        <div class="justify-content-between">
                            <button type="submit" class="btn btn-primary" id="tombol">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{ asset('asset/img/google.png') }}" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                    </div>
                </form>
                <div class="row">
                    <small>{{ __('Dont have Account ?') }}<a href="{{ route('register') }}">{{ __('Sign Up') }}</a></small>
                </div>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/js/Query.js"></script>
    <script src="asset/js/login.js"></script>
@endsection

{{-- <div class="container">
//     <div class="row justify-content-center">
//         <div class="col-md-8">
//             <div class="card">
//                 <div class="card-header">{{ __('Login') }}</div>

//                 <div class="card-body">
//                     <form method="POST" action="{{ route('login') }}">
//                         @csrf

//                         <div class="row mb-3">
//                             <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

//                             <div class="col-md-6">
//                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

//                                 @error('email')
//                                     <span class="invalid-feedback" role="alert">
//                                         <strong>{{ $message }}</strong>
//                                     </span>
//                                 @enderror
//                             </div>
//                         </div>

//                         <div class="row mb-3">
//                             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

//                             <div class="col-md-6">
//                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

//                                 @error('password')
//                                     <span class="invalid-feedback" role="alert">
//                                         <strong>{{ $message }}</strong>
//                                     </span>
//                                 @enderror
//                             </div>
//                         </div>

//                         <div class="row mb-3">
//                             <div class="col-md-6 offset-md-4">
//                                 <div class="form-check">
//                                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

//                                     <label class="form-check-label" for="remember">
//                                         {{ __('Remember Me') }}
//                                     </label>
//                                 </div>
//                             </div>
//                         </div>

//                         <div class="row mb-0">
//                             <div class="col-md-8 offset-md-4">
//                                 <button type="submit" class="btn btn-primary">
//                                     {{ __('Login') }}
//                                 </button>

//                                 @if (Route::has('password.request'))
//                                     <a class="btn btn-link" href="{{ route('password.request') }}">
//                                         {{ __('Forgot Your Password?') }}
//                                     </a>
//                                 @endif
//                             </div>
//                         </div>
//                     </form>
//                 </div>
//             </div>
//         </div>
//     </div>
// </div> --}}
    