@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h2 class="text-center mb-5 main-header">News Highlights</h2>

        <div class="row">

            <!-- LEFT SIDE — MAIN NEWS LIST -->
            {{-- <div class="col-lg-8">

                <!-- NEWS CARD 1 -->
                <div class="news-card d-flex mb-4">
                    <img src="{{ url('public/news-images/6a0d0a392d902bcd595ff05285a523f2f1c433bd.jpg') }}" class="news-img">
                    <div class="news-body">
                        <p class="news-date"><i class="fa-regular fa-calendar"></i> 10 October 2025</p>
                        <h4 class="news-heading">Redwood Unveils New Training Facility for 2025 Season</h4>
                        <p class="news-text">
                            Redwood College unveils a modern lacrosse training complex with upgraded turf,
                            recovery zones, and digital performance tracking.
                        </p>

                        <a href="{{ URL('/single-news') }}" class="news-readmore">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- NEWS CARD 2 -->
                <div class="news-card d-flex mb-4">
                    <img src="{{ url('public/news-images/0f4a71813c75440bb9ff3302fefc850aec5a8593.jpg') }}" class="news-img">
                    <div class="news-body">
                        <p class="news-date"><i class="fa-regular fa-calendar"></i> 2 October 2025</p>
                        <h4 class="news-heading">Lacrosse Scholarship Applications Open for Fall 2025 Intake</h4>
                        <p class="news-text">
                            High school athletes can now apply for Redwood’s competitive sports scholarship program,
                            offering full and partial awards for exceptional talent.
                        </p>

                        <a href="{{ URL('/single-news') }}" class="news-readmore">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- NEWS CARD 3 -->
                <div class="news-card d-flex mb-4">
                    <img src="{{ url('public/news-images/4fd8f693308cb9a6271bd70375d312bb804f80ba.jpg') }}" class="news-img">
                    <div class="news-body">
                        <p class="news-date"><i class="fa-regular fa-calendar"></i> 5 April 2025</p>
                        <h4 class="news-heading">Annual Redwood Sports Day Draws Record Attendance</h4>
                        <p class="news-text">
                            Over 2,000 fans joined the celebration, enjoying exhibitions, alumni matches,
                            and showcases highlighting Redwood athletics.
                        </p>

                        <a href="{{ URL('/single-news') }}" class="news-readmore">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="alumni-box">

                    <h5 class="alumni-title">Alumni News</h5>
                    <div class="alumni-underline"></div>

                    <div class="alumni-item d-flex">
                        <img src="{{ url('public/news-images/d4b4ccc2b6fc2d8b81f6b25cc8b44f373491644b.jpg') }}" class="alumni-img">
                        <div>
                            <p class="alumni-date"><i class="fa-regular fa-calendar"></i> 10 September 2025</p>
                            <p class="alumni-text">Redwood Lacrosse Star Joins Prestigious National League Team</p>
                        </div>
                    </div>

                    <div class="alumni-item d-flex">
                        <img src="{{ url('public/news-images/12e25723043edac9d656ece2230f172a0e1861db.jpg') }}" class="alumni-img">
                        <div>
                            <p class="alumni-date"><i class="fa-regular fa-calendar"></i> 21 August 2025</p>
                            <p class="alumni-text">Legendary Redwood Alumni Game Returns in Exciting Summer Event</p>
                        </div>
                    </div>

                    <div class="alumni-item d-flex">
                        <img src="{{ url('public/news-images/c65a86e5a0ade42a0aea48e6f2fdebf3d7916d41.jpg') }}" class="alumni-img">
                        <div>
                            <p class="alumni-date"><i class="fa-regular fa-calendar"></i> 22 July 2025</p>
                            <p class="alumni-text">2018 Redwood Champions Reunite for Inspiring Charity Lacrosse Match</p>
                        </div>
                    </div>

                </div>

            </div> --}}

        </div>
    </div>

    <style>
       

    </style>
@endsection
