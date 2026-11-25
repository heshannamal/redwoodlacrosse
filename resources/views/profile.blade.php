@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="coaching-wrapper">

            <!-- Title -->
            <h2 class="coach-title main-header">Redwood Coaching Staff</h2>

            @if ($coachId == 1)
            @elseif ($coachId == 2)
                <div class="row g-4">

                    <!-- LEFT IMAGE -->
                    <div class="col-lg-4 col-md-5">
                        <img src="{{ url('public/coachingstaff-images/52735736cf802711061987f10744f5d89118ffe3.jpg') }}"
                            class="coach-img shadow-sm">
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-8 col-md-7">

                        <h3 class="coach-name profile">Scott Jennings</h3>
                        <p class="coach-role profile">Head Coach</p>

                        <p class="coach-text profile">
                            Coach Jennings has 17 years of high school coaching experience, ten years with Refwood High
                            School. Coach Jennings works with all aspects of the game including the offense, defense,
                            special teams, face offs and goalies. Currently he is the Defensive Coordinator, coaches the
                            face offs unit, and goalies.

                        </p>

                        <p class="coach-text profile">
                            Coach Jennings has coached in various club programs including the Alcatraz Outlaws, ACES, and
                            others. Lastly, he focuses on individual and small group lacrosse development with athletes of
                            all ages.

                        </p>

                    </div>
                </div>
            @elseif ($coachId == 3)
                <div class="row g-4">

                    <!-- LEFT IMAGE -->
                    <div class="col-lg-4 col-md-5">
                        <img src="{{ url('public/coachingstaff-images/14df2d66afa76b7834eec6cbafb48894c71cf8bc.jpg') }}"
                            class="coach-img shadow-sm">
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-8 col-md-7">

                        <h3 class="coach-name profile">Stephen Grobecker</h3>
                        <p class="coach-role profile">Coach</p>

                        <p class="coach-text profile">
                        <ul>
                            <li>Northeastern grad, played club ball, started playing in 5th grade</li>
                            <li>Coached Southern Marin Wolfpack for 6 years</li>
                            <li>Coming up on third season with Redwood</li>
                            <li>I am a Director - Retirement Specialist at Bank of America/Merrill Lynch. I cover the entire
                                west coast working with 2500 financial advisors</li>
                            <li>I am a sergeant in the CA State Guard/Army, will be attending officer candidate school,
                                starting
                                this December</li>
                        </ul>
                        </p>

                    </div>
                </div>
            @elseif ($coachId == 4)
                <div class="row g-4">

                    <!-- LEFT IMAGE -->
                    <div class="col-lg-4 col-md-5">
                        <img src="{{ url('public/coachingstaff-images/e42caa41028ddd18942cf0cf48819553b13418f8.jpg') }}"
                            class="coach-img shadow-sm">
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-8 col-md-7">

                        <h3 class="coach-name profile">Tanner Ennis</h3>
                        <p class="coach-role profile">Coach</p>

                        <p class="coach-text profile">
                        <ul>
                            <li>Rockslide Lacrosse Coach, 2023-present</li>
                            <li>Rockslide Lacrosse Coach, 2023-present</li>
                            <li>Dominican University of California 2026 Attackman </li>
                            <li>Dominican Men’s Lacrosse 2025-2026 Team Captain </li>
                            <li>2025 PBC/RMAC Conference all-tournament Team</li>
                            <li>2024-2025 Domincan University Male Athlete of the Year Finalist</li>
                            <li>Dominican Men’s Lacrosse 2025 Team MVP</li>
                        </ul>
                        </p>

                    </div>
                </div>
            @elseif ($coachId == 5)
                <div class="row g-4">

                    <!-- LEFT IMAGE -->
                    <div class="col-lg-4 col-md-5">
                        <img style="height: 22rem;"
                            src="{{ url('public/coachingstaff-images/284ea3d1fe88f3df7516b6dc9097d6335a7f2675.jpg') }}"
                            class="coach-img shadow-sm">
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-8 col-md-7">

                        <h3 class="coach-name profile">Zach Thoma</h3>
                        <p class="coach-role profile">Co-Head Coach</p>

                        <p class="coach-text profile">
                            Zach Thoma is a 2019 graduate of Redwood High School and a former Under Armour All-American.
                            After completing a postgraduate year at the Kent School in Connecticut, he went on to play two
                            seasons of NCAA Division III lacrosse at St. Lawrence University and one season of NCAA Division
                            II lacrosse at Dominican University of California. Co-head Coach 2025 season
                        </p>


                    </div>
                </div>
            @elseif ($coachId == 6)
            @else
            @endif
        </div>
    </div>
@endsection
