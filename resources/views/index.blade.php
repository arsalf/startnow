@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
    <div class="carousel-hedaer">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#555" dy=".3em">First
                            slide</text>
                    </svg>

                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#666" /><text x="50%" y="50%" fill="#444" dy=".3em">Second
                            slide</text>
                    </svg>

                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#555" /><text x="50%" y="50%" fill="#333" dy=".3em">Third
                            slide</text>
                    </svg>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <h1 class="mt-3">Title</h1>
        <div class="my-3">
            @for ($j = 0; $j < 2; $j++)
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
                                    class="card-img-top" alt="...">
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
                                    <h6 class="card-subtitle mb-2 text-muted">Software</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of
                                        the card's content.</p>
                                    <a href="#" class="btn btn-card mr-2"><i class="fa-solid fa-circle-info"></i> Detail</a>
                                    <a href="#" class="btn btn-card "><i class="fa-solid fa-message"></i> Message</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod tempor inviduer. Ut enim ad
            minim</p>
    </div>
@endsection

@section('js')
@endsection
