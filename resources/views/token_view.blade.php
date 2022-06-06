@extends('layout.master')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-1 px-3"><a class="navbar-brand" href="/">
                            <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">
                        </a> {{ __('Your Transaction Token') }}</div>

                    <div class="card-body overflow-auto">
                        <div class="h2">
                            {{$token}}
                        </div>
                        <a href="{{ route('invest.simulasi')}}">Simulasi Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
