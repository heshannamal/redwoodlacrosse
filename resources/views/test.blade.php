@extends('layouts.app')

@section('content')

<style>
    .coach-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 14px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        transition: 0.2s ease;
    }

    .coach-card img {
        border-radius: 12px;
        height: 260px;
        object-fit: cover;
        width: 100%;
    }

    .coach-name {
        font-weight: 600;
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 2px;
    }

    .coach-role {
        color: #7d7d7d;
        font-size: 13px;
    }

    .coaching-title {
        font-size: 32px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 40px;
        font-style: italic;
    }
</style>


<section class="py-5">
    <div class="container">

        <h2 class="coaching-title">Redwood Coaching Staff</h2>

        <div class="row justify-content-center g-4">

            <!-- CARD -->
            <div class="col-lg-3 col-md-6">
                <div class="coach-card">
                    <img src="coachingstaff-images/66b2b545dfbf140e71f47edfa89d21d61bb0b5b0.jpg">
                    <div class="coach-name">Neil Butterfield</div>
                    <div class="coach-role">Head Coach</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="coach-card">
                    <img src="coachingstaff-images/52735736cf802711061987f10744f5d89118ffe3.jpg">
                    <div class="coach-name">Scott Jennings</div>
                    <div class="coach-role">Head Coach</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="coach-card">
                    <img src="coachingstaff-images/284ea3d1fe88f3df7516b6dc9097d6335a7f2675.jpg">
                    <div class="coach-name">Zach Thoma</div>
                    <div class="coach-role">Co-Head Coach</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="coach-card">
                    <img src="coachingstaff-images/14df2d66afa76b7834eec6cbafb48894c71cf8bc.jpg">
                    <div class="coach-name">Stephen Grobecker</div>
                    <div class="coach-role">Head Coach</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="coach-card">
                    <img src="coachingstaff-images/6453b19fcc41d0cd7bb98a9642a3df0af5edb5dc.jpg">
                    <div class="coach-name">Adam Rosenthal</div>
                    <div class="coach-role">Co-Head Coach</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="coach-card">
                    <img src="coachingstaff-images/e42caa41028ddd18942cf0cf48819553b13418f8.jpg">
                    <div class="coach-name">Tanner Ennis</div>
                    <div class="coach-role">Head Coach</div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- ======================= WE'RE HIRING ======================= -->
<section class="py-5" style="background: #f3f5f9;">
    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT IMG (Illustration) -->
            <div class="col-lg-6 text-center">
                <img src="hiring-images/lacrosse-illustration.png" class="img-fluid" style="max-width: 380px;">
            </div>

            <!-- TEXT -->
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3">
                    We’re <span style="color:#d60000;">Hiring</span>
                </h1>

                <p class="mb-3">
                    Are you interested in joining our coaching team?
                </p>

                <p class="fw-semibold">
                    Email us at <span class="text-danger">Redwoodhiring@gmail.com</span>
                </p>
            </div>

        </div>
    </div>
</section>


@endsection