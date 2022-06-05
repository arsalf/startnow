@extends('layout.master')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header p-1 px-3"><a class="navbar-brand" href="/">
                    <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">                    
                </a> {{ __('Register Your Startup') }}</div>

                <div class="card-body overflow-auto">
                    <form method="POST" action="{{ route('startups.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>
                            <div class="col-md-6 d-flex align-items-center">                                
                                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" row mb-3s="3"></textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Kantor') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nohp" class="col-md-4 col-form-label text-md-end">{{ __('No. Telepon Kantor') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <input id="nohp" type="number" class="form-control" name="nohp" required >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tgl_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Berdiri') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" required >
                            </div>
                        </div>                                                
                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Kantor') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <input id="alamat" type="text" class="form-control" name="alamat" required >
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 d-flex align-items-center offset-md-4">
                                <button type="submit" class="btn btn-primary p-1">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
