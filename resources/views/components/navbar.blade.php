<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm" style="position: sticky; top: 0; z-index: 9999;">
    <div class="container">

        <a class="navbar-brand" href="{{ URL('/') }}">
            <img src="{{ url('public/images/logo.png') }}" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <!-- TEAMS DROPDOWN -->
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle {{ request()->is('teams-roster') || request()->routeIs('coaching.staff') ? 'active' : '' }}"
                        href="#" id="teamsDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Teams
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="teamsDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->is('teams-roster') ? 'active' : '' }}"
                                href="{{ URL('/teams-roster') }}">
                                Teams Roster
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('coaching-staff') ? 'active' : '' }}"
                                href="{{ URL('/coaching-staff') }}">
                                Coaching Staff
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- SCHEDULE -->
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('schedule') ? 'active' : '' }}" href="{{ URL('/schedule') }}">
                        Schedule
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('news') || request()->is('single-news') ? 'active' : '' }}"
                        href="{{ URL('/news') }}">
                        News
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('alumni') ? 'active' : '' }}" href="{{ URL('/alumni') }}">
                        Alumni
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('records') ? 'active' : '' }}" href="{{ URL('/records') }}">
                        Records
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('historical-seasons') || request()->is('media-albums') || request()->is('media-album-single*') ? 'active' : '' }}"
                        href="{{ URL('/historical-seasons') }}">
                        Historical Seasons
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('coming-soon') ? 'active' : '' }}"
                        href="{{ URL('/coming-soon') }}">
                        Team Store
                    </a>
                </li>
            </ul>

            <button class="btn btn-danger donate-btn px-4" data-bs-toggle="modal" data-bs-target="#donateModal">
                <i class="fa-solid fa-heart"></i> Donate
            </button>
        </div>
    </div>
    @include('components.donation')
</nav>
