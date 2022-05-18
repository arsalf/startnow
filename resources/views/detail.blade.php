@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('title')
    <title>Startnow : Invest Your Idea</title>
@endsection

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="row g-0">
          <div class="col-md-5">
            <img src="{{asset('image/dummy-card.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('js')
@endsection
