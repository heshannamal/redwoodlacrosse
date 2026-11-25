<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function teamsRoster()
    {
        return view('teams-roster');
    }

    public function team()
    {
        return view('team');
    }


    public function coachingStaff()
    {
        return view('coaching-staff');
    }

    public function coachingProfile($id)
    {
        $coachId = $id;
        return view('profile', compact('coachId'));
    }


    public function schedule()
    {
        // $schedule = Schedule::all();
        return view('schedule');
    }

    public function news()
    {
        return view('news');
    }

    public function alumni()
    {
        return view('alumni');
    }


    public function singleNew()
    {
        return view('single-news');
    }

    public function records()
    {

        return view('records');
    }


    public function historicalSeasons()
    {
        return view("historical-seasons");
    }


    public function mediaAlbums2025()
    {
        return view('media-albums');
    }

    

    public function mediaAlbumSingle($folder, $name)
    {
        $name = urldecode($name);
        return view('media-album-single', compact('folder', 'name'));
    }

    public function comingSoon() {
        
        return view('coming-soon');
    }
}
