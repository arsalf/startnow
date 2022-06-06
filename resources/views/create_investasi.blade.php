@extends('layout.master')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-1 px-3"><a class="navbar-brand" href="/">
                            <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">
                        </a> {{ __('Add Transaction Investasi') }}</div>

                    <div class="card-body overflow-auto">
                        <form method="POST" action="{{ route('invest.store', $product->product_id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="d-flex align-items-center">
                                    <div class="card-authors me-3">
                                        <div class="card-text">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('image/thumbnail/' . $product->startup->thumbnail) }}"
                                                    class="img-fluid" alt="..."
                                                    style="max-width:35px;max-height:35px;"><br>
                                            </div>

                                            <small class="">{{ $product->startup->name }}</small>
                                        </div>
                                    </div>
                                    <h2 class="card-title">{{ $product->title }}</h2>
                                </div>
                            </div>
                            <hr class="mb-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <div>Found Needed</div>
                                    <div class="h3">
                                        @php
                                            $hasil_rupiah = 'Rp ' . number_format($product->modal, 0, ',', '.');
                                            echo $hasil_rupiah;
                                        @endphp
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div>Your Investation</div>
                                    <div class="h3">
                                        <input name="dana" class="form-range" type="range" value="100000" min="100000"
                                            max="{{ $product->modal }}" step="100000"
                                            oninput="this.nextElementSibling.value = this.value">
                                        Rp. <output>100000</output>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="ttd" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Saya sadar dan yakin akan berinvestasi
                                </label>
                            </div>

                            <div class="row mb-0">
                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary p-1">
                                        <i class="fa-solid fa-handshake"></i>
                                        {{ __('Invest Now') }}
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
