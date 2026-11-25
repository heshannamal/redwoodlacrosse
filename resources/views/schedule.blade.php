@extends('layouts.app')

@section('content')
    <section class="schedule-section py-5">
        <div class="container">

            <!-- Title -->
            <h2 class="text-center schedule-title mb-4">
                Redwood Lacrosse Schedule 2026
            </h2>

            <div class="table-responsive">
                <table class="table schedule-table mb-0">

                    <thead>
                        <tr class="schedule-row">
                            <th>Date</th>
                            <th>Game</th>
                            <th>Time</th>
                            <th>Team</th>
                            <th>Game Date</th>
                            <th>Home/Away</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- <tr class="schedule-row">
                            <td class="schedule-date">February 21, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Acalanes Scrimmage</span>
                            </td>
                            <td class="schedule-time">9.00 am</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Saturday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr> --}}

                        <tr class="schedule-row">
                            <td class="schedule-date">February 24, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood </span>
                                <span class="vs">vs</span>
                                <span class="opponent">SRV Scrimmage</span>
                            </td>
                            <td class="schedule-time">3.00 pm</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 3, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">St. Francis</span>
                            </td>
                            <td class="schedule-time">7.00 pm / 5.00 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@SFHS</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 6, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">SHP</span>
                            </td>
                            <td class="schedule-time">3.30 pm / 5.00 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">@SHP</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 10, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">MA</span>
                            </td>
                            <td class="schedule-time">3.30 pm / 5.00 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@MA</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 13, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">DLS</span>
                            </td>
                            <td class="schedule-time">3.30 pm / 5.00 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 14, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">JV Jamboree</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Saturday</td>
                            <td class="schedule-location">@ MC</td>
                        </tr>
{{-- 
                        <tr class="schedule-row">
                            <td class="schedule-date">March 17, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Casa Grande</span>
                            </td>
                            <td class="schedule-time">6:00 pm</td>
                            <td class="schedule-team">Varsity</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@Casa</td>
                        </tr> --}}

                        <tr class="schedule-row">
                            <td class="schedule-date">March 18, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Casa Grande</span>
                            </td>
                            <td class="schedule-time">6:00 pm</td>
                            <td class="schedule-team">Varsity</td>
                            <td class="schedule-day">Wednesday</td>
                            <td class="schedule-location">@Casa</td>
                        </tr>

                        {{-- <tr class="schedule-row">
                            <td class="schedule-date">March 19, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Branson</span>
                            </td>
                            <td class="schedule-time">4.00 pm</td>
                            <td class="schedule-team">Varsity</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">@Branson</td>
                        </tr> --}}

                        <tr class="schedule-row">
                            <td class="schedule-date">March 20, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">SI</span>
                            </td>
                            <td class="schedule-time">6.00 pm / 4.00 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">@SI</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 24, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Berkeley</span>
                            </td>
                            <td class="schedule-time">4.00 pm / 5.30 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 26, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Archie Williams</span>
                            </td>
                            <td class="schedule-time">4.00 pm</td>
                            <td class="schedule-team">Varsity</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 27, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Monte Vista</span>
                            </td>
                            <td class="schedule-time">4.00 pm / 5.30 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 31, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Tamalpais</span>
                            </td>
                            <td class="schedule-time">4.00 pm</td>
                            <td class="schedule-team">Varsity</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@Tam</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 2, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Terra Linda</span>
                            </td>
                            <td class="schedule-time">4.00 pm / 5.30 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">@TL</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 16, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">San Rafael</span>
                            </td>
                            <td class="schedule-time">4.00 pm</td>
                            <td class="schedule-team">Varsity</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 18, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Oak Ridge</span>
                            </td>
                            <td class="schedule-time">1.00 pm / 11.00 am</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Saturday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 21, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Marin Catholic</span>
                            </td>
                            <td class="schedule-time">4.00 pm / 5.30 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 23, 2026</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">San Maria</span>
                            </td>
                            <td class="schedule-time">4.00 pm / 5.30 pm</td>
                            <td class="schedule-team">Varsity / Junior Varsity</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <style>

    </style>
@endsection
