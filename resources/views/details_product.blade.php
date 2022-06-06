@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-comments.css') }}">
    <style>
        .helper {
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

    </style>
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="px-lg-5 mt-3">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($product->images as $image)
                                @if ($count == 0)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                @else
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="{{ $count }}"
                                        aria-label="Slide {{ $count + 1 }}"></button>
                                @endif
                                @php
                                    $count += 1;
                                @endphp
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($product->images as $image)
                                <div class="carousel-item @if ($count == 0) active @endif"
                                    style="text-align: center;">
                                    <span class="helper"></span>
                                    <img src="{{ asset('image/products/' . $image) }}"
                                        class="d-block img-fluid rounded-start mx-auto"
                                        alt="image_product{{ $count }}" style="  height: auto;
                                                                width: 100%;
                                                              /* even more control with max-width */
                                                                max-width: 400px;max-height:400px;">
                                </div>
                                @php
                                    $count += 1;
                                @endphp
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="col-lg-7 bg-white text-dark">
                    <div class="card-body">
                        <h2 class="card-title">{{ $product->title }}</h2>
                        <div class="card-authors d-flex align-items-center">
                            <div class="card-text d-flex align-items-center">
                                <img src="{{ asset('image/dummy-avatar.png') }}" class="img-fluid" alt="..."
                                    style="max-width:35px;max-height:35px;">
                                <small class="mx-2">{{ $product->startup->name }}</small>
                            </div>
                            <p class="card-text mx-2"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <hr class="my-1">
                        <div class="card-info">
                            <p class="card-text m-0">Fund needed:</p>
                            <h1 id="currencyField" class="card-title text-primary">
                                @php
                                    $hasil_rupiah = 'Rp ' . number_format($product->modal, 0, ',', '.');
                                    echo $hasil_rupiah;
                                @endphp
                            </h1>
                            <p class="card-text mb-1">Progress invest:</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">
                                    95%
                                </div>
                            </div>
                            <p class="card-text mb-3">Proposal :</p>
                            <div class="row mb-3 group-file">
                                @foreach ($product->proposal_files as $proposal)
                                    <div class="col-md-3">
                                        <div class="file text-center">
                                            <a class="text-decoration-none text-dark"
                                                href="{{ asset('file/proposal/' . $proposal) }}" download>
                                                <i class="fa-solid fa-file"></i>
                                                <div class="file-name">
                                                    {{ $proposal }}
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="invest d-flex justify-content-center">
                                @if ($product->startup->owner == Auth::user()->username)
                                    <a class="text-decoration-none text-white" href="{{route('products.edit', [$product->startup->id, $product->product_id])}}">
                                        <button type="button" class="btn btn-primary">
                                            Manage
                                        </button>
                                    </a>                                    
                                @else
                                    <a href="{{route('invest.add', $product->product_id)}}">
                                        <button type="button" class="btn btn-primary">
                                            Invest Now
                                        </button>    
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="px-lg-5 mt-3">
            <div class="row bg-white g-0">
                <div class="col">
                    <div class="row m-lg-5 mb-lg-2">
                        <div class="col">
                            <div class="wrap-bg bg-light">
                                <h3 class="m-0 p-2">Spesifikasi Produk</h3>
                            </div>
                            <ul>
                                <li>
                                    Total Investor : 10
                                </li>
                                <li>
                                    Dana terkumpul : Rp 1.000.000
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row m-lg-5 mt-lg-0">
                        <div class="col">
                            <div class="wrap-bg bg-light">
                                <h3 class="m-0 p-2">Deskripsi Produk</h3>
                            </div>
                            <p class="p-2">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Curabitur vitae facilisis nisi. In id ex sed turpis rutrum ultrices non ut
                                nisl. Praesent ullamcorper, odio ut convallis iaculis, ipsum nisl maximus purus, vitae
                                efficitur leo dui eget tellus. Nunc rutrum euismod tellus, id pretium ex vestibulum eu. Nunc
                                egestas dui vitae ipsum cursus posuere. Nunc quis eros sed arcu consectetur dictum. Maecenas
                                blandit dolor vel nibh accumsan, ac dictum est rhoncus. Proin quis nisl eget ligula
                                hendrerit malesuada. Nullam ante diam, fermentum et pharetra sit amet, placerat quis magna.
                                Proin malesuada metus eget pulvinar facilisis. Nullam tortor neque, molestie in quam et,
                                sollicitudin pharetra purus.

                                Integer viverra dapibus mattis. Nunc aliquam libero at erat porta, id tincidunt lacus
                                pellentesque. Etiam in tempor velit, quis tristique nisl. Vivamus lobortis faucibus
                                venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                turpis egestas. Aliquam venenatis mauris mauris, eget suscipit felis mollis ac. Duis
                                sagittis justo sed purus imperdiet porta. Sed sed vestibulum tellus. Phasellus ac rutrum
                                sapien. Donec nisl dolor, tristique quis nunc ut, luctus facilisis ipsum. Vestibulum dapibus
                                urna non sollicitudin auctor. Praesent mauris felis, fringilla eget laoreet non, convallis
                                quis orci. In hac habitasse platea dictumst. Sed enim augue, pulvinar et porttitor vel,
                                egestas ac risus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="px-lg-5 mt-3">
            <div class="row bg-white g-0">
                <div class="col">
                    <div class="row m-lg-5 mb-lg-2">
                        <div class="col">
                            <div class="wrap-bg bg-light">
                                <h3 class="m-0 p-2">Komentar Produk</h3>
                            </div>
                            <div class="komentar p-2">
                                <div id="comments-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Data -->
    <script type="text/javascript" src="{{ asset('js/comments-data.js') }}"></script>
    <!-- INIT COMMENT -->
    <script type="text/javascript" src="{{ asset('js/jquery-comments.js') }}"></script>
    <script>
        $(function() {
            var saveComment = function(data) {

                // Convert pings to human readable format
                $(Object.keys(data.pings)).each(function(index, userId) {
                    var fullname = data.pings[userId];
                    var pingText = '@' + fullname;
                    data.content = data.content.replace(new RegExp('@' + userId, 'g'), pingText);
                });

                return data;
            }

            $('#comments-container').comments({
                profilePictureURL: 'https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png',
                currentUserId: 1,
                roundProfilePictures: true,
                textareaRows: 1,
                enableAttachments: true,
                enableHashtags: true,
                enablePinging: true,
                scrollContainer: $(window),
                searchUsers: function(term, success, error) {
                    setTimeout(function() {
                        success(usersArray.filter(function(user) {
                            var containsSearchTerm = user.fullname.toLowerCase()
                                .indexOf(term.toLowerCase()) != -1;
                            var isNotSelf = user.id != 1;
                            return containsSearchTerm && isNotSelf;
                        }));
                    }, 500);
                },
                getComments: function(success, error) {
                    setTimeout(function() {
                        success(commentsArray);
                    }, 500);
                },
                postComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                putComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                deleteComment: function(data, success, error) {
                    setTimeout(function() {
                        success();
                    }, 500);
                },
                upvoteComment: function(data, success, error) {
                    setTimeout(function() {
                        success(data);
                    }, 500);
                },
                validateAttachments: function(attachments, callback) {
                    setTimeout(function() {
                        callback(attachments);
                    }, 500);
                },
            });
        });
    </script>
@endsection
