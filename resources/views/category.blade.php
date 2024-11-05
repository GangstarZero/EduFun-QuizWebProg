@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="mt-5 mx-5 d-flex justify-content-around">
        <h2>{{ $category }}</h2>
        <p></p>
        <p></p>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div>
            @foreach ($posts as $p)
                <div class="post-box p-3 d-flex justify-content-between">
                    <img src="{{ asset($p->asset_path) }}" class="post-image">
                    <div>
                        <h2>{{ $p->title }}</h2>
                        <p>{{ $p->created_at->format('d F Y') }} | By: {{ $p->writer->name }} </p>
                        <p class="">{{ Str::limit($p->body, 150, '...') }}</p>
                    </div>
                    <button class="align-self-end btn btn-info read-more" data-id="{{ $p->id }}"
                        onclick="redirectToPost(this)">Read More</button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
