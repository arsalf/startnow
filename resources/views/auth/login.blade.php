@extends('layouts.app')

@section('content')
    {{-- <section class="d-flex align-items-center justify-content-center vh-100"> --}}
    <div class="container">
        {{-- <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #04</h2>
                </div>
            </div> --}}
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img position-relative"
                        style="background-image: url({{ asset('image/business-office-data-image.jpg') }});">
                        <div class="d-flex align-items-center justify-content-center pb-3 position-absolute w-100 wrap-dark" style="bottom:0; --bs-bg-opacity:.5;">
                            <div class="logo text-center h3 mb-0">
                                <b>STARNOW<br>INVEST YOUR IDEA</b>
                            </div>
                        </div>                        
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Login</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a>
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="email">{{ __('Email Address') }}</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="Password" autocomplete="current-password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded px-3">Login</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">{{ __('Remember Me') }}
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('password.request') }}">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center">Not a member? <a data-toggle="tab"
                                href="{{ route('register') }}">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}

    {{-- <script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="{{asset('js/main.js')}}"></script> --}}
@endsection
