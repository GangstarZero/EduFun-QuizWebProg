@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('content')
    <div class="mt-5 mx-5">
        <h2>{{ $post->category->name }}</h2>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="post">
            <img src="{{ asset($post->asset_path) }}" class="post-img">
            <p>{{ $post->created_at->format('d F Y') }} | By: {{ $post->writer->name }}</p>
            <p class="post-body">{{$post->body}}</p>
        </div>
    </div>
@endsection
