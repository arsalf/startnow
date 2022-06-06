@extends('layout.master')

@section('css')

@endsection

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-1 px-3"><a class="navbar-brand" href="/">
                            <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">
                        </a> {{ __('Edit Startup ') . $startup->name }}</div>

                    <div class="card-body overflow-auto">
                        <form method="POST" action="{{ route('startups.update', $startup->_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" required autocomplete="name" autofocus value="{{ $startup->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="deskripsi"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" row
                                        mb-3s="3">{{ $startup->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Kantor') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $startup->email }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nohp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No. Telepon Kantor') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="nohp" type="number" class="form-control" name="nohp"
                                        value="{{ $startup->no_hp }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Berdiri') }}</label>
                                @php
                                    $time = strtotime($startup->tanggal_berdiri);
                                    $newformat = date('Y-m-d', $time);
                                @endphp
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir"
                                        value="{{ $newformat }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat Kantor') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="alamat" type="text" class="form-control" name="alamat"
                                        value="{{ $startup->alamat }}" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 d-flex align-items-center offset-md-4">
                                    <a class="text-decoration-none text-white me-3"
                                        href="{{ route('startups.show', $startup->_id) }}">
                                        <button type="button" class="btn btn-danger p-1">
                                            {{ __('Cancel') }}
                                        </button>
                                    </a>
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-primary p-1">
                                        {{ __('Update') }}
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

@section('js')
    <script>

    </script>
@endsection
