@extends('layouts.app')

@section('content')
    <!-- TEAMS ROSTER SECTION -->
    <section class="teams-section py-5">
        <div class="container">

            <!-- SECTION TITLE -->
            <h2 class="text-center fw-bold mb-5 teams-title">
                Redwood Lacrosse Teams Roster
            </h2>

            <div class="row justify-content-center g-4">

                <!-- CARD 1 -->
                <div class="col-12 col-lg-6 d-flex justify-content-center">
                    <div class="teams-card position-relative">

                        <!-- decorative left dotted strip -->
                        <div class="teams-card-decor"></div>

                        <div class="teams-image-wrapper mx-auto">
                            {{-- <a href="{{ URL('/team') }}"> --}}
                                <img src="{{ url('public/teams-roster-images/2d2e42ba2b95ac6ec7d18d4e76042b3ef7daf5f6.jpg') }}"
                                    class="teams-image" alt="Varsity Team">
                            {{-- </a> --}}
                        </div>

                        <div class="teams-card-body px-3 pt-3">
                            <h5 class="team-title">Boys Varsity Lacrosse Team</h5>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <p class="team-coach mb-0">Head Coach: Neil Butterfield</p>

                                <a href="#" class="roster-btn">
                                    <i class="fa-solid fa-clipboard"></i>
                                    Roster
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-12 col-lg-6 d-flex justify-content-center">
                    <div class="teams-card position-relative">

                        <!-- decorative left dotted strip -->
                        <div class="teams-card-decor"></div>

                        <div class="teams-image-wrapper mx-auto">
                            {{-- <a href="{{ URL('/team') }}"> --}}
                                <img src="{{ url('public/teams-roster-images/fca092b934fd20f84001b02beff90c8dd5b90f90.png') }}"
                                    class="teams-image" alt="Junior Varsity Team">
                            {{-- </a> --}}
                        </div>

                        <div class="teams-card-body px-3 pt-3">
                            <h5 class="team-title">Boys Junior Varsity Lacrosse Team</h5>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <p class="team-coach mb-0">Head Coach: Zach Thoma & Adam Rosenthal</p>

                                <a href="#" class="roster-btn">
                                    <i class="fa-solid fa-clipboard"></i>
                                    Roster
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
