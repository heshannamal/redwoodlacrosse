@extends('layouts.app')

@section('content')
    {{-- <style>
        body {
            background: #f4f5f7;
             font-family: "Rubik", sans-serif;
        }

        .player-card {
            background: #fff;
            border-radius: 8px;
            padding: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.05);
        }

        .player-img {
            width: 72px;
            height: 72px;
            border-radius: 6px;
            object-fit: cover;
        }

        .player-number {
            width: 55px;
            height: 55px;
            background: #111;
            color: #fff;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 20px;
        }

        .player-meta small {
            color: #6c757d;
            font-size: 14px;
        }

        .full-bio {
            font-size: 14px;
            font-weight: 600;
            color: #000;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .coach-card {
            background: #fff;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.05);
            border-left: 6px solid #d92323;
        }
    </style> --}}

    <div class="container py-5">

        <!-- PAGE TITLE -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold sub-header">Boys Varsity Lacrosse Team Roster</h2>
            <a href="#" class="text-danger fw-semibold"><svg width="20" height="20" viewBox="0 0 20 20"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.75 11.25V10H15V16.25H16.25V13.75H18.125V12.5H16.25V11.25H18.75ZM11.875 16.25H9.375V10H11.875C12.3721 10.0005 12.8488 10.1982 13.2003 10.5497C13.5518 10.9012 13.7495 11.3779 13.75 11.875V14.375C13.7495 14.8721 13.5518 15.3488 13.2003 15.7003C12.8488 16.0518 12.3721 16.2495 11.875 16.25ZM10.625 15H11.875C12.0408 15 12.1997 14.9342 12.3169 14.8169C12.4342 14.6997 12.5 14.5408 12.5 14.375V11.875C12.5 11.7092 12.4342 11.5503 12.3169 11.4331C12.1997 11.3158 12.0408 11.25 11.875 11.25H10.625V15ZM6.875 10H3.75V16.25H5V14.375H6.875C7.20637 14.3745 7.52402 14.2426 7.75834 14.0083C7.99265 13.774 8.1245 13.4564 8.125 13.125V11.25C8.125 10.9185 7.9933 10.6005 7.75888 10.3661C7.52446 10.1317 7.20652 10 6.875 10ZM5 13.125V11.25H6.875L6.87563 13.125H5Z"
                        fill="#CF1D2B" />
                    <path
                        d="M13.75 8.75V6.25C13.7522 6.16786 13.7366 6.08622 13.7042 6.01069C13.6719 5.93516 13.6235 5.86755 13.5625 5.8125L9.1875 1.4375C9.13272 1.37616 9.06515 1.32759 8.98956 1.29519C8.91397 1.2628 8.8322 1.24737 8.75 1.25H2.5C2.16878 1.25099 1.85142 1.383 1.61721 1.61721C1.383 1.85141 1.25099 2.16878 1.25 2.5V17.5C1.25 17.8315 1.3817 18.1495 1.61612 18.3839C1.85054 18.6183 2.16848 18.75 2.5 18.75H12.5V17.5H2.5V2.5H7.5V6.25C7.50099 6.58121 7.633 6.89858 7.86721 7.13279C8.10142 7.36699 8.41878 7.49901 8.75 7.5H12.5V8.75H13.75ZM8.75 6.25V2.75L12.25 6.25H8.75Z"
                        fill="#CF1D2B" />
                </svg>
                Download Roster</a>
        </div>

        <!-- SECTION: CAPTAINS -->
        <h5 class="fw-bold mb-3">Captains</h5>

        <!-- CARD -->
        <div class="player-card list mb-3">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}" class="player-img">
                <div class="player-number">47</div>
                <div>
                    <h6 class="fw-bold mb-1">Colin Holman</h6>
                    <div class="player-meta">
                        <small><b>Position:</b> Defense</small> |
                        <small><b>Hand:</b> L</small> |
                        <small><b>Height:</b> 6'2</small> |
                        <small><b>Weight:</b> 185 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="full-bio">Full Bio →</a>
        </div>


        <h5 class="fw-bold mt-4 mb-3">Attack</h5>

        <!-- PLAYER 1 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}" class="player-img"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    05
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Darrell Steward</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Attack</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 5'8</small> |
                        <small><b>Weight:</b> 165 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>

        <!-- PLAYER 2 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}" class="player-img"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    11
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Kristin Watson</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Attack</small> |
                        <small><b>Hand:</b> L</small> |
                        <small><b>Height:</b> 5'6</small> |
                        <small><b>Weight:</b> 170 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>

        <!-- PLAYER 3 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}" class="player-img"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    54
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Cameron Williamson</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Attack</small> |
                        <small><b>Hand:</b> L/R</small> |
                        <small><b>Height:</b> 6'1</small> |
                        <small><b>Weight:</b> 160 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>




        <!-- MIDFIELD -->
        <h5 class="fw-bold mt-4 mb-3">Midfield</h5>

        <!-- PLAYER 1 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    91
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Darlene Robertson</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Midfield</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 5'9</small> |
                        <small><b>Weight:</b> 180 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 2 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    07
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Bessie Cooper</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Midfield</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 6'6</small> |
                        <small><b>Weight:</b> 185 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 3 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    18
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Eleanor Pena</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Midfield</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 7'2</small> |
                        <small><b>Weight:</b> 171 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 4 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    12
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Arlene McCoy</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Midfield</small> |
                        <small><b>Hand:</b> L</small> |
                        <small><b>Height:</b> 6'8</small> |
                        <small><b>Weight:</b> 162 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 5 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    19
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Albert Flores</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Midfield</small> |
                        <small><b>Hand:</b> L/R</small> |
                        <small><b>Height:</b> 7'1</small> |
                        <small><b>Weight:</b> 164 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- DEFENSE -->
        <h5 class="fw-bold mt-4 mb-3">Defense</h5>

        <!-- PLAYER 1 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    27
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Savannah Nguyen</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Defense</small> |
                        <small><b>Hand:</b> L</small> |
                        <small><b>Height:</b> 6'8</small> |
                        <small><b>Weight:</b> 168 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 2 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    36
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Ronald Richards</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Defense</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 6'5</small> |
                        <small><b>Weight:</b> 174 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 3 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    15
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Esther Howard</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Defense</small> |
                        <small><b>Hand:</b> L/R</small> |
                        <small><b>Height:</b> 6'2</small> |
                        <small><b>Weight:</b> 180 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 4 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    08
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Devon Lane</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Defense</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 7'1</small> |
                        <small><b>Weight:</b> 170 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 5 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    41
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Albert Flores</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Defense</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 7'4</small> |
                        <small><b>Weight:</b> 172 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>

        <!-- FACEOFF -->
        <h5 class="fw-bold mt-4 mb-3">Faceoff</h5>

        <!-- PLAYER 1 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    61
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Bessie Cooper</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Faceoff</small> |
                        <small><b>Hand:</b> L</small> |
                        <small><b>Height:</b> 5'8</small> |
                        <small><b>Weight:</b> 165 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- PLAYER 2 -->
        <div class="player-card p-3 mb-3 border rounded d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}"
                    style="width:70px;height:70px;object-fit:cover;border-radius:6px;">

                <div class="player-number d-flex align-items-center justify-content-center"
                    style="width:60px;height:60px;background:#1e1e1e;color:white;
                    font-size:22px;font-weight:700;border-radius:6px;">
                    38
                </div>

                <div>
                    <h6 class="fw-bold mb-1">Cameron Williamson</h6>
                    <div class="player-meta text-muted">
                        <small><b>Position:</b> Faceoff</small> |
                        <small><b>Hand:</b> L/R</small> |
                        <small><b>Height:</b> 5'9</small> |
                        <small><b>Weight:</b> 155 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>

            <a href="#" class="text-decoration-none fw-semibold" style="color:#000;">Full Bio →</a>
        </div>


        <!-- SECTION: GOALIE -->
        <h5 class="fw-bold mt-4 mb-3">Goalie</h5>

        <div class="player-card mb-4">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ url('public/team-images/ec5d98c5a7031096e4bcc49dbbc2df6a7d8cd011.jpg') }}" class="player-img">
                <div class="player-number">49</div>
                <div>
                    <h6 class="fw-bold mb-1">Jerome Bell</h6>
                    <div class="player-meta">
                        <small><b>Position:</b> Goalie</small> |
                        <small><b>Hand:</b> R</small> |
                        <small><b>Height:</b> 6'2</small> |
                        <small><b>Weight:</b> 168 lbs</small> |
                        <small><b>Grade:</b> 12</small>
                    </div>
                </div>
            </div>
            <a href="#" class="full-bio">Full Bio →</a>
        </div>


        <!-- COACHING STAFF -->
        <h5 class="fw-bold mt-4 mb-3">Coaching Staff</h5>

        <div class="coach-wrapper mb-4" style="max-width: 380px;">
            <div class="bg-white p-3 rounded shadow-sm d-flex align-items-center gap-3 border-bottom"
                style="border-radius: 8px 8px 0 0;">
                <img src="{{ url('public/team-images/52735736cf802711061987f10744f5d89118ffe3.jpg') }}" alt="Coach"
                    style="width:70px; height:100px; border-radius:6px; object-fit:cover;">
                <div>
                    <h6 class="fw-bold mb-1">Scott Jennings</h6>
                    <small class="text-muted">Head Coach</small>
                </div>
            </div>

            <!-- Red underline bar -->
            <div style="height: 6px; background:#d82323; border-radius:0 0 8px 8px;"></div>
        </div>

    </div>
@endsection
