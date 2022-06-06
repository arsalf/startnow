@extends('layout.master')

@section('content')
    <div class="container mt-3">
        @if (\Session::has('success'))
        <div class="row">
            <div class="col">
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            </div>            
        </div>    
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-1 px-3"><a class="navbar-brand" href="/">
                            <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">
                        </a> {{ __('Simulasi Pembayaran') }}</div>

                    <div class="card-body overflow-auto">
                        <form method="POST" action="{{ route('invest.bayar') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <div>Your Token :</div>
                                    <div class="h3">
                                        <input name="token" class="form-control" type="text" required>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div>Your Money (RP) :</div>
                                    <div class="h3">
                                        <input name="money" class="form-control" type="number" required>                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col d-flex justify-content-center">
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-primary p-1">                                        
                                        {{ __('Bayar Sekarang') }}
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
