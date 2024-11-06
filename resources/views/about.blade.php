@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container-fluid d-flex vh-100 w-50 justify-content-center">
        <div class="d-flex justify-content-center flex-column">
            <h2 class="d-flex justify-content-center">About EduFun</h2>
            <p class="text-center">EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses
                pendidikan dalam format tulkisan berbahasa Indonesia yang disajikan secara online melalui website. </p>
            <br>
            <p class="text-center">Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari
                pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan
                sains
                yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia
                yang
                memahami ilmu pengetahuan dan cinta belajar.</p>
        </div>
    </div>
@endsection
