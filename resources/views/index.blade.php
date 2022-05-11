@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('image/dummy-banner2.jpg')}}" class="d-block w-100" alt="{{asset('image/dummy-banner.jpg')}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/dummy-banner2.jpg')}}" class="d-block w-100" alt="{{asset('image/dummy-banner.jpg')}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/dummy-banner2.jpg')}}" class="d-block w-100" alt="{{asset('image/dummy-banner.jpg')}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <h1 class="mt-3 text-center">The Ideas</h1>
        <div class="my-3">
            @for ($j = 0; $j < 2; $j++)
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-3">
                            <div class="card rounded-3">
                                <img src="{{asset('image/dummy-photo.jpg')}}"
                                    class="card-img-top" alt="{{asset('image/dummy-banner.jpg')}}">
                                <div class="card-body">
                                    <div class="info-detail d-flex justify-content-between">
                                        <div>
                                            <h6>10k <i class="fa-solid fa-file-contract"></i></h6>
                                        </div>
                                        <div>
                                            <h6 class="likes">100k <i class="fa-solid fa-heart"></i>
                                                <h6>
                                        </div>
                                    </div>
                                    <h5 class="card-title">Calculator Sederhana</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <img src="{{asset('image/dummy-avatar.png')}}" height="25px" width="25px"class="rounded-circle" alt="...">
                                        Startnow
                                    </h6>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of
                                        the card's content.</p> --}}
                                    <a href="#" class="btn btn-card mr-2"><i class="fa-solid fa-circle-info"></i> Detail</a>
                                    <a href="#" class="btn btn-card "><i class="fa-solid fa-message"></i> Message</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('js')
@endsection
