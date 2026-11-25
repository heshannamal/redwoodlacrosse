@extends('layouts.app')

@section('content')
    <!-- HERO SECTION 1 -->
    {{-- <div class="container my-4">
        <a href="{{ URL('/alumni') }}">
            <img src="{{ url('public/images/Alumni.png') }}" class="section-img"
                alt="">
        </a>
    </div> --}}

    <!-- TRYOUT WEEK SECTION -->
    {{-- <div class="container mb-4">

        <img src="{{ url('public/images/Tryout.png') }}" class="section-img" alt="">

    </div> --}}

    <!-- SCHEDULE SECTION -->
    <div class="container mb-4">
        <a href="{{ URL('/schedule') }}">
            <img src="{{ url('public/images/Schedule.png') }}" class="section-img"
                alt="">
        </a>
    </div>

    <!-- RECORDS SEASON -->
    <div class="container mb-4">
        <a href="{{ URL('/records') }}">
            <img src="{{ url('public/images/Records.png') }}" class="section-img"
                alt="">
        </a>
    </div>

    <!-- HISTORICAL MEDIA -->
    <div class="container mb-5">
        <a href="{{ URL('/historical-seasons') }}">
            <img src="{{ url('public/images/highlights.png') }}" class="section-img"
                alt="">
        </a>
    </div>


@endsection

