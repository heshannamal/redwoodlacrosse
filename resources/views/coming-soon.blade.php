@extends('layouts.app')

@section('content')
    <style>
        <style>

        /* wrapper */
        .coming-wrapper {
            background: #f6f7f8;
            overflow-x: hidden;
        }

        /* left content */
        .coming-title {
            font-family: 'Racing Sans One', cursive;
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 400;
            color: #111827;
        }

        .coming-sub {
            font-size: 16px;
            color: #6b7280;
            max-width: 460px;
        }

        /* countdown */
        .countdown {
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .count-box {
            background: #ffffff;
            border-radius: 16px;
            padding: 18px 22px;
            min-width: 92px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            position: relative;
            transition: all 0.25s ease;
        }

        .count-box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 4px;
            width: 100%;
            background: #6366f1;
            border-radius: 16px 16px 0 0;
        }

        .count-box:hover {
            transform: translateY(-6px);
        }

        .count-box span {
            font-size: 30px;
            font-weight: 700;
            color: #111827;
        }

        .count-box small {
            font-size: 12px;
            letter-spacing: 0.8px;
            color: #6b7280;
        }

        /* image card */
        .image-glass {
            background: #ffffff;
            border-radius: 22px;
            padding: 22px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.08);
            animation: float 4s ease-in-out infinite;
        }

        .image-glass img {
            max-height: 360px;
            width: 100%;
            object-fit: contain;
        }

        /* subtle animation */
        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0);
            }
        }

        /* mobile */
        @media (max-width: 768px) {
            .coming-sub {
                margin: 0 auto;
            }

            .image-glass img {
                max-height: 260px;
            }
        }
    </style>

    </style>
    <div class="coming-wrapper">
        <div class="container py-5">
            <div class="row align-items-center min-vh-100">

                <!-- LEFT -->
                <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                    <h1 class="coming-title mb-3">We’re Launching Soon</h1>
                    <p class="coming-sub mb-4">
                        A powerful experience is on the way.
                        Stay tuned for something next-level.
                    </p>

                    <div class="countdown d-flex justify-content-center justify-content-lg-start gap-3">
                        <div class="count-box">
                            <span id="days">00</span>
                            <small>DAYS</small>
                        </div>
                        <div class="count-box">
                            <span id="hours">00</span>
                            <small>HOURS</small>
                        </div>
                        <div class="count-box">
                            <span id="minutes">00</span>
                            <small>MINUTES</small>
                        </div>
                        <div class="count-box">
                            <span id="seconds">00</span>
                            <small>SECONDS</small>
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-6 text-center">
                    <div class="image-glass mx-auto">
                        <img src="public/images/26691.jpg" alt="Coming Soon">
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        const launchDate = new Date();
        launchDate.setDate(launchDate.getDate() + 30);

        const launchTime = launchDate.getTime();

        setInterval(() => {
            const now = new Date().getTime();
            const diff = launchTime - now;

            if (diff <= 0) return;

            document.getElementById("days").innerText =
                Math.floor(diff / (1000 * 60 * 60 * 24));

            document.getElementById("hours").innerText =
                Math.floor((diff / (1000 * 60 * 60)) % 24);

            document.getElementById("minutes").innerText =
                Math.floor((diff / (1000 * 60)) % 60);

            document.getElementById("seconds").innerText =
                Math.floor((diff / 1000) % 60);
        }, 1000);
    </script>
@endsection
