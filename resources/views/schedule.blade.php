@extends('layouts.app')

@section('content')
    <section class="schedule-section py-5">
        <div class="container">
            <h2 class="text-center schedule-title mb-4">
                Redwood Lacrosse Schedule 2027
            </h2>

            <div class="table-responsive">
                <table class="table schedule-table mb-0">
                    <thead>
                        <tr class="schedule-row">
                            <th scope="col">Date</th>
                            <th scope="col">Game</th>
                            <th scope="col">Time</th>
                            <th scope="col">Team</th>
                            <th scope="col">Day</th>
                            <th scope="col">Home/Away</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="schedule-row">
                            <td class="schedule-date">February 8, 2027</td>
                            <td class="schedule-game">
                                <span class="opponent">Tryouts</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Monday</td>
                            <td class="schedule-location">-</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">February 23, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Acalanes</span>
                            </td>
                            <td class="schedule-time">3:30pm/5pm</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">February 26, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">SRV</span>
                            </td>
                            <td class="schedule-time">3:30pm/5pm</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 2, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">St. Francis</span>
                            </td>
                            <td class="schedule-time">3:30pm/5pm</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 5, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">SHP</span>
                            </td>
                            <td class="schedule-time">3:30pm/5pm</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 9, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">DLS</span>
                            </td>
                            <td class="schedule-time">3:30pm/5pm</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@ DLS</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 12, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">MA</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 16, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Jesuit</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 18, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">San Marin</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">@ SM</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 23, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Tamalpais</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 25, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Branson</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 26, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Monte Vista</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">@ MVHS</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 30, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Archie Williams</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@ AW</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">March 31, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">St. Margarets</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Wednesday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 1, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Terra Linda</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">Redwood High School</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 13, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">San Rafael</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@ SR</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 16, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">Oak Ridge</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Friday</td>
                            <td class="schedule-location">@ ORHS</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 20, 2027</td>
                            <td class="schedule-game">
                                <span class="team">Redwood</span>
                                <span class="vs">vs</span>
                                <span class="opponent">MC</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Tuesday</td>
                            <td class="schedule-location">@ MC</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">April 29, 2027</td>
                            <td class="schedule-game">
                                <span class="opponent">MCAL SEMIS</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Thursday</td>
                            <td class="schedule-location">-</td>
                        </tr>

                        <tr class="schedule-row">
                            <td class="schedule-date">May 1, 2027</td>
                            <td class="schedule-game">
                                <span class="opponent">MCAL CHAMPIONSHIP</span>
                            </td>
                            <td class="schedule-time">TBD</td>
                            <td class="schedule-team">-</td>
                            <td class="schedule-day">Saturday</td>
                            <td class="schedule-location">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
