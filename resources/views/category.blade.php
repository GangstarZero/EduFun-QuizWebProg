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

    <div class="container-fluid d-flex mt-5 justify-content-center flex-column card mb-3" style="max-width: 1500px;">
        @foreach ($posts as $p)
            <div class="p-3 row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($p->asset_path) }}" class="img-fluid rounded-start ">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2>{{ $p->title }}</h2>
                        <p>{{ $p->created_at->format('d F Y') }} | By: {{ $p->writer->name }} </p>
                        <p class="">{{ Str::limit($p->body, 150, '...') }}</p>
                    </div>
                    <div class="d-flex justify-content-end mt-auto p-3">
                        <button class="btn btn-info" data-id={{$p->id}} onclick=redirectToPost(this)>Read More</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
