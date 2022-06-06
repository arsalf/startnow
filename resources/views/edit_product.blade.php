@extends('layout.master')

@section('css')
    <style>
        .box-img {
            position: relative;
            text-align: center;
            color: white;
        }

        .top-right {
            position: absolute;
            top: -7px;
            right: -5px;
        }

    </style>
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header p-1 px-3"><a class="navbar-brand" href="/">
                            <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">
                        </a> {{ __('Add Your Product') }}</div>

                    <div class="card-body overflow-auto">
                        <form method="POST" action="{{ route('products.update', [$startup_id, $product->product_id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ $product->title }}" required autocomplete="title" autofocus>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="deskripsi"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" row
                                        mb-3s="3">{{ $product->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kategori"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kategori') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <select name="kategori" id="kategori-box" class="form-select"
                                        aria-label="Default select example">                                        
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->name }}"
                                                @if ($product->kategori == $kategori->name) selected="selected" @endif>
                                                {{ $kategori->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="images"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Add Images') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="images" type="file" class="form-control" name="images[]" multiple>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Your Images') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="d-flex image-yg-ada">
                                        @foreach ($product->images as $images)
                                            <div class="box-img me-3">
                                                <img src="{{ asset('image/products/' . $images) }}"
                                                    class="img  img-reponsive" style="max-width:50px;height:auto">
                                                <div class="top-right bg-danger rounded-circle text-white px-2">X</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3 justify-content-center">
                                Data Investasi
                            </div>
                            <div class="row mb-3">
                                <label for="modal"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Modal (Rp)') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="modal" type="number" class="form-control" name="modal"
                                        value="{{ $product->modal }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="proposal"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Proposal Files') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="proposal" type="file" class="form-control" name="proposal[]"
                                        multiple>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Your Proposal') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    @foreach ($product->proposal_files as $proposal)
                                        <div class="d-flex file">
                                            <a class="me-1" href="{{ asset('file/proposal/' . $proposal) }}"
                                                download> {{ $proposal }} </a>
                                            <div class="bg-danger rounded-circle text-white px-2">X</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 d-flex align-items-center offset-md-4">
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-primary p-1">
                                        {{ __('Update') }}
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

@section('js')
    <script src="{{ asset('vendor/dselect/dselect.js') }}"></script>
    <script>
        function InsertAjaxJs(url, formData) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                dataType: 'json',
                success: function(data) {
                    alert(data);
                    console.log(data);
                },
                error: function(data) {
                    alert("gagal");
                    console.log(data);
                }
            });
        }

        function TakeKategoriAjaxJs(url) {
            result = "";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: url,
                data: [],
                dataType: 'json',
                success: function(data) {
                    let form = "";

                    data.forEach(each);

                    function each(item, index) {
                        form = form + `
                        <option value="` + item._id + `">` + item.name + `</option>
                    `;
                    }

                    $("#kategori-data").html(form);

                    console.log($("#kategori-data"));
                },
                error: function(data) {
                    alert("gagal load kategori! please reload!");
                }
            });

            return result;
        }

        $(document).ready(function() {
            url = "{{ route('kategori') }}";

            // TakeKategoriAjaxJs(url);

            var select_box_element = document.querySelector('#kategori-box');

            dselect(select_box_element, {
                search: true
            });

        });
    </script>
@endsection
