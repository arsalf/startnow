@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-comments.css') }}">
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="h1 me-3">Profile</div>
            <div class>
                <button type="button" class="btn btn-primary-outline p-0">
                    <i class="fa-solid fa-pencil"></i>
                </button>
            </div>
        </div>
        <div class="mb-3 p-3 fs-5 bg-white">
            @foreach ($user as $key => $value)
                @if (is_array($value) || is_object($value))
                    @foreach ($value as $k => $v)
                        @if (!in_array($v, $hidden))
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    {{ ucwords(str_replace('_', ' ', $v)) }}
                                </div>
                                <div class="col-md-9">
                                    : {{ $user->$v }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#managestartups">
                Manage Your Startup's!
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="managestartups" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>                        
                        @foreach ($user->startups as $startups)                        
                            <li>
                                <a href="{{ route('startups.show', $startups->_id) }}" data-> {{ $startups->name }} </a>
                            </li>
                        @endforeach
                    </ul>
                    {{-- @php
                        echo $user->startups;    
                    @endphp --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">
                        <a href="{{ route('startups.create') }}" class="text-decoration-none text-white">
                           Add Startup
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
