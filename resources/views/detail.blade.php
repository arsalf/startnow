@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-comments.css')}}">
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
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                                <img src="{{ asset('image/dummy-card.jpg') }}" class="d-block img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                                <img src="{{ asset('image/dummy-card.jpg') }}" class="d-block img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                                <img src="{{ asset('image/dummy-card.jpg') }}" class="d-block img-fluid rounded-start"
                                    alt="...">
                            </div>
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
                            <p class="card-text mb-1">Progress invest:</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">
                                    95%
                                </div>
                            </div>
                            <p class="card-text mb-1">Document :</p>
                            <div class="group-file">
                                @for ($j = 0; $j < 2; $j++)
                                    <div class="row mb-2">
                                        @for ($i = 0; $i < 4; $i++)
                                            <div class="col-md-3">
                                                <div class="file text-center">
                                                    <i class="fa-solid fa-file"></i>
                                                    <div class="file-name">
                                                        Nama File {{ $i + 1 }}.pdf
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
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
<script type="text/javascript" src="{{asset('js/comments-data.js')}}"></script>
<!-- INIT COMMENT -->
<script type="text/javascript" src="{{asset('js/jquery-comments.js')}}"></script>
<script type="text/javascript">
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
                        var containsSearchTerm = user.fullname.toLowerCase().indexOf(term.toLowerCase()) != -1;
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
