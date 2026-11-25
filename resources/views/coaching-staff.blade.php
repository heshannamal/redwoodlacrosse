@extends('layouts.app')

@section('content')
    <section class="section py-5">
        <div class="container">

            <h2 class="coaching-title sub-header">Redwood Coaching Staff</h2>

            <div class="row justify-content-center g-4">

                <!-- CARD -->
                <div class="col-lg-3 col-md-6">
                    <div class="coach-card">
                        <a href="{{ route('coachingProfile', ['id' => 1]) }}">
                            <img src="{{ url('public/coachingstaff-images/66b2b545dfbf140e71f47edfa89d21d61bb0b5b0.jpg') }}">
                        </a>
                        <div class="coach-name">Neil Butterfield</div>
                        <div class="coach-role">Head Coach</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="coach-card">
                        <a href="{{ route('coachingProfile', ['id' => 2]) }}">
                            <img
                                src="{{ url('public/coachingstaff-images/52735736cf802711061987f10744f5d89118ffe3.jpg') }}">
                        </a>
                        <div class="coach-name">Scott Jennings</div>
                        <div class="coach-role">Head Coach</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coach-card">
                        <a href="{{ route('coachingProfile', ['id' => 5]) }}">
                            <img
                                src="{{ url('public/coachingstaff-images/284ea3d1fe88f3df7516b6dc9097d6335a7f2675.jpg') }}">
                        </a>
                        <div class="coach-name">Zach Thoma</div>
                        <div class="coach-role">Co-Head Coach</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="coach-card">
                        <a href="{{ route('coachingProfile', ['id' => 3]) }}">
                            <img
                                src="{{ url('public/coachingstaff-images/14df2d66afa76b7834eec6cbafb48894c71cf8bc.jpg') }}">
                        </a>
                        <div class="coach-name">Stephen Grobecker</div>
                        <div class="coach-role">Coach</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coach-card">
                        <a href="{{ route('coachingProfile', ['id' => 6]) }}">
                            <img
                                src="{{ url('public/coachingstaff-images/6453b19fcc41d0cd7bb98a9642a3df0af5edb5dc.jpg') }}">
                        </a>
                        <div class="coach-name">Adam Rosenthal</div>
                        <div class="coach-role">Coach</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coach-card">
                        <a href="{{ route('coachingProfile', ['id' => 4]) }}">
                            <img
                                src="{{ url('public/coachingstaff-images/e42caa41028ddd18942cf0cf48819553b13418f8.jpg') }}">
                        </a>
                        <div class="coach-name">Tanner Ennis</div>
                        <div class="coach-role">Coach</div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- <section class="hiring-section">

        <!-- Slanted Background -->
        <div class="hiring-bg"></div>

        <div class="container hiring-content">
            <div class="row align-items-center">

                <!-- LEFT: Player -->
                <div class="col-lg-4 col-md-5 text-center text-lg-start mb-4 mb-lg-0">
                    <img src="{{ url('public/coachingstaff-images/5c3d065516cf31e37d7cb936c2623f8420e44224 (1).png') }}"
                        alt="player" class="hiring-player">
                </div>

                <!-- CENTER: Text -->
                <div class="col-lg-4 col-md-7 text-center text-lg-start">
                    <h2 class="hiring-title">We’re <span>Hiring</span></h2>
                    <p class="hiring-desc">Are you interested in joining our coaching team?</p>
                    <p class="hiring-desc">Email us at <strong>Redwoodhiring@gmail.com</strong></p>
                </div>

                <!-- RIGHT: Photo -->
                <div class="col-lg-4 col-12 text-lg-end text-center">
                    <div class="hiring-photo">
                        <img src="{{ url('public/coachingstaff-images/97e1479b64cd38f1ef332fdde4133fe2f8abc247.jpg') }}"
                            alt="team photo">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


@endsection

