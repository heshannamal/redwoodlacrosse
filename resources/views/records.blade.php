@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <!-- Title -->
        <h2 class="main-header text-center fw-bold mb-2">
            Redwood Lacrosse Records</h2>
        <p class="text-center mb-5" style="max-width: 700px; margin: auto; font-family: Rubik, sans-serif;">
            Here are some of the many accomplishments our Redwood High School teams have achieved over the years.
            Your contributions to the Redwood Lacrosse program will not be forgotten.
        </p>

        <h4 class="sub-header fw-bold mb-4">Pennants</h4>

        <!-- Bootstrap Grid -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 g-4">

            <!-- Pennant Items -->
            <div class="col text-center">
                <img src="{{ url('public/record-imagees/2632418f4c0a6617ebfd30bdd7930b5b33eb43e3.png') }}" class="img-fluid"
                    alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/be73d577d3eab75fd025a21dbf08987346dac493.png') }}" class="img-fluid"
                    alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/035ce61ec6a3ed4768a226bf9ce6204250764866.png') }}" class="img-fluid"
                    alt="">
            </div>

            {{-- <div class="col text-center">
                <img src="{{ url('public/record-imagees/dccb3f773136bac31cecba60ee634d922d704e10 (1).png') }}"
                    class="img-fluid" alt="">
            </div> --}}

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/7c170c1112e4b628526db3b38e58d756710f3523.png') }}" class="img-fluid"
                    alt="">
            </div>

            <!-- Row 2 -->
            <div class="col text-center">
                <img src="{{ url('public/record-imagees/627970aae96215705e77587d79d587a1bc927142.png') }}" class="img-fluid"
                    alt="">
            </div>

            {{-- <div class="col text-center">
                <img src="{{ url('public/record-imagees/87955b2bd6e892b0c4818d5eaacc32146bab6fa7.png') }}" class="img-fluid"
                    alt="">
            </div> --}}

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/481d889af8b56e723f4da89413186f27e5bd4227.png') }}" class="img-fluid"
                    alt="">
            </div>

            {{-- <div class="col text-center">
                <img src="{{ url('public/record-imagees/dccb3f773136bac31cecba60ee634d922d704e10 (2).png') }}"
                    class="img-fluid" alt="">
            </div> --}}

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/329176df07b26ff2d5edb5ca986732477e4416f1.png') }}" class="img-fluid"
                    alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/10.png') }}"
                    class="img-fluid" alt="">
            </div>

            <!-- Row 3 -->
            <div class="col text-center">
                <img src="{{ url('public/record-imagees/59a49e97cf3366bc80a96a76a2f14cbb1db7c7f9.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/404f464f3db39943f453a82b3b82feb66e9c96ed.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/82b755d065759dbc531d6a823346dd2dc0470e56.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/a8cf144a08e181f406cf5ad4506fd484c6141596.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col text-center">
                <img src="{{ url('public/record-imagees/Redwood_MCAL Champions_2025.png') }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

    <style>

    </style>


    <div class="container py-5">
        <h2 class="sub-header fw-bold mb-4">Player Awards</h2>
        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="award-card">

                    <div class="d-flex align-items-center gap-2 award-header">
                        {{-- <img src="{{ url('public/record-imagees\a6479ec34987c9d2fc6a65f8feeec71fbb4c0c1a.png') }}"> --}}
                        <h5 class="fw-bold mb-0"> MCAL Player of the Year</h5>
                    </div>

                    <div class="award-inner">

                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Charlie Anderson</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2026</div>
                            </div>
                        </div>
                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Colin McGrath</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2023</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Dennis Van Der Wal</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2022</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Harrison Hetrick</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2019</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Jack Elders</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2017</div>
                            </div>
                        </div>
                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Liam Bourke</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2014</div>
                            </div>
                        </div>
                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Tyler Simmons</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2009</div>
                            </div>
                        </div>
                        <div class="award-item">
                            <img
                                src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Cooper Helfet</div>
                                <div class="award-sub">MCAL Player of the Year</div>
                                <div class="award-year">2007</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="award-card">

                    <div class="d-flex align-items-center gap-2 award-header">
                        <img src="{{ url('public/record-imagees/1b4b8071c2b70f9e80017bab6e10d00aee31c8b3.png') }}">
                        <h5 class="fw-bold mb-0">US Lacrosse All Americans</h5>
                    </div>

                    <div class="award-inner">

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Jake Vasquez</div>
                                <div class="award-year">2024</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Colin McGrath</div>
                                <div class="award-year">2023</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Colin Harper</div>
                                <div class="award-year">2023</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Jack Elders</div>
                                <div class="award-year">2017</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="award-card">

                    <div class="d-flex align-items-center gap-2 award-header">
                        <img src="{{ url('public/record-imagees/76cd0908541d0dc85d0c537987e5f8fe763ba51e.png') }}">
                        <h5 class="fw-bold mb-0">Academic All-Americans</h5>
                    </div>

                    <div class="award-inner">

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Luke Tempero</div>
                                <div class="award-year">2025</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">John Anderluh</div>
                                <div class="award-year">2025</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Eddie Lin</div>
                                <div class="award-year">2024</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Jackson Lesher</div>
                                <div class="award-year">2024</div>
                            </div>
                        </div>

                        <div class="award-item">
                            <img src="{{ url('public/record-imagees/5dcdff0957fcf0fd7216ed9b4bf984b8d3a8c70b.jpg') }}">
                            <div>
                                <div class="award-title">Willy Baker</div>
                                <div class="award-year">2022</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
