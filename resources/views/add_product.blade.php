@extends('layout.master')

@section('css')
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
                        <form method="POST" action="{{ route('products.store', $startup_id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
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
                                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" row mb-3s="3"></textarea>
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
                                    <select name="kategori" id="kategori-box" class="form-select" aria-label="Default select example">                                       
                                        <option value="">--Select Kategori--</option>
                                        @foreach($kategoris as $kategori)
                                            <option value="{{$kategori->name}}">{{$kategori->name}}</option>
                                        @endforeach     
                                      </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="images" class="col-md-4 col-form-label text-md-end">{{ __('Images') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="images" type="file" class="form-control" name="images[]" required multiple>
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
                                    <input id="modal" type="number" class="form-control" name="modal" required>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <label for="proposal" class="col-md-4 col-form-label text-md-end">{{ __('Proposal Files') }}</label>
                                <div class="col-md-6 d-flex align-items-center">
                                    <input id="proposal" type="file" class="form-control" name="proposal[]" required multiple>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 d-flex align-items-center offset-md-4">
                                    <button type="submit" class="btn btn-primary p-1">
                                        {{ __('Add') }}
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
<script src="{{asset('vendor/dselect/dselect.js')}}"></script>
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
                        form = form+`
                        <option value="`+item._id+`">`+item.name+`</option>
                    `; 
                    }

                    $("#kategori-data").html(form);
                    
                    console.log( $("#kategori-data"));
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
