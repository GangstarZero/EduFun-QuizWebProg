@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('content')
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="container row text-center">
            @foreach ($writer as $w)
                <button data-id={{ $w->id }} class="btn col">
                    <a href="/writer/{{ $w->id }}" class="text-decoration-none">
                        <img src="{{ $w->asset_path }}" class="" style="max-width: 300px;">
                        <p><strong>{{ $w->name }}</strong></p>
                        <p>{{ $w->division }}</p>
                    </a>
                </button>
            @endforeach
        </div>
    </div>
@endsection
