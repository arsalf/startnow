@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .box-img {
            position: relative;
            text-align: center;
            color: white;
        }

        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
        }

    </style>
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
                <img src="{{ asset('image/dummy-banner2.jpg') }}" class="d-block w-100"
                    alt="{{ asset('image/dummy-banner.jpg') }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/dummy-banner2.jpg') }}" class="d-block w-100"
                    alt="{{ asset('image/dummy-banner.jpg') }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/dummy-banner2.jpg') }}" class="d-block w-100"
                    alt="{{ asset('image/dummy-banner.jpg') }}">
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
        <h1 class="mt-3 text-center"><i class="fa-regular fa-compass"></i> Explore Ideas</h1>
        <div class="row my-3">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card rounded-3">
                        <div class="box-img">
                            <img src="{{ asset('image/products/' . current($product->images)) }}" class="card-img-top"
                                alt="thumbnail products">
                            <div class="top-right rounded bg-secondary px-1">{{ $product->kategori }}</div>
                        </div>
                        <div class="card-body">
                            <div class="info-detail d-flex justify-content-between">
                                <div>
                                    <h6><span>{{ $product->invests->count() }}</span> <i
                                            class="fa-solid fa-handshake"></i>
                                    </h6>
                                </div>
                                <div>
                                    <h6 class="likes"> <span>{{ $product->likers->count() }}</span>
                                        <i id="{{ $product->_id.'-'.$product->startup->id }}"
                                            class="fa-solid fa-heart @if (in_array([Auth::user()->username], $product->likers->toArray())) likeit @endif"></i>
                                    </h6>
                                </div>
                            </div>
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <img src="{{ asset('image/thumbnail/' . $product->startup->thumbnail) }}" height="25px"
                                    width="25px" class="rounded-circle" alt="...">
                                {{ $product->startup->name }}
                            </h6>
                            <a href="{{ route('home.show', $product->_id) }}" class="btn btn-card mr-2"><i
                                    class="fa-solid fa-circle-info"></i> Detail</a>
                            <a href="#"
                                class="btn btn-card "><i class="fa-solid fa-message"></i>
                                Message</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(".fa-solid.fa-heart").click(function() {
            let id = $(this).attr('id');
            id = id.split('-');
            let num = parseInt($(this).siblings('span').text());
            let url = "";

            if ($(this).hasClass("likeit")) {
                num -= 1;
                url = "dislike";
            } else {
                num += 1;
                url = "like";
            }

            $(this).toggleClass("likeit");
            $(this).siblings().html(num);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/startups/"+id[1]+"/product/" + id[0] + "/" + url,
                data: {
                    'username': '{{ Auth::user()->username }}'
                },
                dataType: 'json',
                success: function(data) {
                    // alert(data);
                    // console.log(data);
                },
                error: function(data) {
                    alert("gagal");
                    console.log(data);
                }
            });

        });
    </script>
@endsection
