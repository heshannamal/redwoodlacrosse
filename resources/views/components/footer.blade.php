<footer class="bg-light py-5">
    <div class="container footer">

        <div class="row gy-4">

            <!-- LOGO + SOCIAL -->
            <div class="col-12 col-md-3 text-center text-md-start footer">
                <a href="{{ URL('/') }}">
                    <img src="{{ url('public/images/logo.png') }}" alt="Logo" height="70" class="mb-3 footer-logo">
                </a>

                <p class="fw-bold mb-2 footer">Connect with us</p>

                <div class="d-flex gap-2 justify-content-center justify-content-md-start">

                    <div class="border p-2 rounded d-flex align-items-center justify-content-center footer"
                        style="width:40px; height:40px;">
                        <a href="https://www.facebook.com/RedwoodLacrosse/" target="__blank">
                            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="footer-icon"
                                width="20">
                        </a>
                    </div>

                    <div class="border p-2 rounded d-flex align-items-center justify-content-center footer"
                        style="width:40px; height:40px;">
                        <a href="https://www.instagram.com/redwoodlacrosse/" target="__blank">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" class="footer-icon"
                                width="20">
                        </a>
                    </div>

                    <div class="border p-2 rounded d-flex align-items-center justify-content-center footer"
                        style="width:40px; height:40px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" class="footer-icon"
                            width="20">
                    </div>

                </div>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-12 col-md-3 text-center text-md-start">
                <h6 class="fw-bold mb-3 ft-title">Quick Links</h6>

                <ul class="list-unstyled">
                    <li class="mb-2 footer"><a href="{{ URL('/schedule') }}">Schedule</a></li>
                    <li class="mb-2 footer"><a href="{{ URL('/teams-roster') }}">Teams Roster</a></li>
                    <li class="mb-2 footer"><a href="{{ URL('/coaching-staff') }}">Coaching Staff</a></li>
                    <li class="mb-2 footer"><a href="{{ URL('/records') }}">Records</a></li>
                    <li class="mb-2 footer"><a href="{{ URL('/alumni') }}">Alumni</a></li>
                    <li class="mb-2 footer"><a href="{{ URL('/coming-soon') }}">Team Store</a></li>
                </ul>
            </div>

            <!-- MEDIA BY YEAR -->
            <div class="col-12 col-md-3 text-center text-md-start">
                <h6 class="fw-bold mb-3 ft-title">Media By Year</h6>

                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2 footer"><a href="{{ URL('/media-albums-2025') }}">2025</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2023/2023+Memories?mediaAlbum=false') }}">2023</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/images-not-available') }}">2021</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2019/2019+Memories?mediaAlbum=false') }}">2019</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2017/2017+Memories?mediaAlbum=false') }}">2017</a></li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2024/2024+Memories?mediaAlbum=false') }}">2024</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2022/2022+Memories?mediaAlbum=false') }}">2022</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2020/2020+Memories?mediaAlbum=false') }}">2020</a></li>
                            <li class="mb-2 footer"><a href="{{ URL('/media-album-single/2018/2018+Memories?mediaAlbum=false') }}">2018</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CONTACT -->
            <div class="col-12 col-md-3 text-center text-md-start">
                <h6 class="fw-bold mb-3 ft-title">Contact Us</h6>

                <p class="mb-2 d-flex gap-2 justify-content-center justify-content-md-start footer">
                    <span>📍</span>
                    <span>395 Doherty Dr, Larkspur, CA 94939</span>
                </p>

                <p class="mb-2 d-flex gap-2 justify-content-center justify-content-md-start footer">
                    <span>✉️</span>
                    <span>Giants@RedwoodLacrosse.com</span>
                </p>

                {{-- <p class="mb-2 d-flex gap-2 justify-content-center justify-content-md-start footer">
                    <span>📞</span>
                    <span></span>
                </p> --}}
            </div>

        </div>

        <!-- Underline -->
        <div class="d-flex justify-content-center my-4">
            <div style="width:100%; max-width:1168px; height:0; border-top:10px solid #CF1D2B;"></div>
        </div>

        <p class="text-center text-muted m-0">
            © All Rights Reserved. Redwood Lacrosse Club
        </p>
    </div>
</footer>
