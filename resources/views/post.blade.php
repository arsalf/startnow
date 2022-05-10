@extends('layout.master')

@section('title')
<title>Test</title>
@endsection

@section('content')
<h1>{{$post->title}}</h1>
<div>{{$post->body}}</div>
@endsection