@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-comments.css') }}">
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
    <div class="container my-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="h1 me-3">Profile Startup {{ $startup->name }}</div>
                <div class>
                    <button id="edit" type="button" class="btn btn-primary-outline p-0">
                        <a href="{{ route('startups.edit', $startup->id) }}">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </button>
                </div>
            </div>
            <div class="mb-3 p-3 fs-5 bg-white">
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Owner :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        {{ $startup->owner }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Nama :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        {{ $startup->name }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Tanggal Berdiri :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        @php
                            $time = strtotime($startup->tanggal_berdiri);
                            $newformat = date('l, d F Y', $time);
                            echo $newformat;
                        @endphp
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Deskripsi :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        {{ $startup->deskripsi }}
                    </div>
                </div>
                <hr>
                <div class="h3">
                    Kantor
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Email :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        {{ $startup->email }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        No Telepon :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        {{ $startup->no_hp }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Alamat :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        {{ $startup->alamat }}
                    </div>
                </div>
                <hr>
                <div class="h3">
                    Members
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 text-end">
                        Member :
                    </div>
                    <div class="col-md-9 value" contenteditable="false">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-user fa-lg"></i>
                                    {{-- <img src="" class="img-thumbnail rounded-circle" alt="..."> --}}
                                    <div>nama</div>
                                    <div>job</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-user fa-lg"></i>
                                    {{-- <img src="" class="img-thumbnail rounded-circle" alt="..."> --}}
                                    <div>nama</div>
                                    <div>job</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-user fa-lg"></i>
                                    {{-- <img src="" class="img-thumbnail rounded-circle" alt="..."> --}}
                                    <div>nama</div>
                                    <div>job</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="h1">
                    <i class="fa-regular fa-compass"></i> Your Products
                </div>            
                <div>
                    <button class="btn btn-primary">Add Product</button>
                </div>
            </div>            
            <div class="bg-white mb-5">
                <div class="row">
                    @if (count($startup->products) == 0)
                        <div class="fs-3 text-center">You dont have any products</div>
                    @else
                        @foreach ($startup->products as $products)
                            <div class="col-md-3">
                                <div class="card rounded-3">
                                    <img src="{{ asset('image/dummy-photo.jpg') }}" class="card-img-top"
                                        alt="{{ asset('image/dummy-banner.jpg') }}">
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
                                        <h5 class="card-title">Simple Calculator</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <img src="{{ asset('image/dummy-avatar.png') }}" height="25px" width="25px"
                                                class="rounded-circle" alt="...">
                                            Startnow
                                        </h6>
                                        <a href="{{ route('home.show', 'id') }}" class="btn btn-card mr-2"><i
                                                class="fa-solid fa-circle-info"></i> Detail</a>
                                        <a href="#" class="btn btn-card "><i class="fa-solid fa-gear"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{-- <script>
function toggleEditable(){
    if(($(".value").attr('contenteditable'))=="false"){
        $(".value").attr('contenteditable','true');
    }else{
        $(".value").attr('contenteditable','false');
    }
}
$("#edit").click(function(){    
    toggleEditable();

});
</script> --}}
@endsection
