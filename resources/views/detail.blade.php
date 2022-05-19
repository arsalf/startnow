@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="px-5 mt-3">
            <div class="row g-0">
                <div class="col-md-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                            <img src="{{ asset('image/dummy-card.jpg') }}" class="d-block img-fluid rounded-start" alt="...">
                          </div>
                          <div class="carousel-item">
                            {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                            <img src="{{ asset('image/dummy-card.jpg') }}" class="d-block img-fluid rounded-start" alt="...">
                          </div>
                          <div class="carousel-item">
                            {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                            <img src="{{ asset('image/dummy-card.jpg') }}" class="d-block img-fluid rounded-start" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    
                </div>
                <div class="col-md-7 bg-white text-dark">
                    <div class="card-body">
                        <h2 class="card-title">Simple Calculator</h2>
                        <div class="card-authors d-flex align-items-center">
                            <div class="card-text d-flex align-items-center">
                                <img src="{{ asset('image/dummy-avatar.png') }}" class="img-fluid" alt="..."
                                    style="max-width:35px;max-height:35px;">
                                <small class="mx-2">Author</small>
                            </div>
                            <p class="card-text mx-2"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <hr class="my-1">
                        <div class="card-info">                  
                            <p class="card-text m-0">Minimal invest:</p>
                            <h1 class="card-title text-primary">Rp 1.000.000</h1>
                            {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer. ini deskripsi denggan maximal 1000
                                huruf.</p> --}}
                            <div class="group-file">
                                <div class="file">
                                    <i class="fa-solid fa-file"></i>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
