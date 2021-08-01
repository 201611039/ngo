<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function servicesPage()
    {
        return view('dashboard.about-us.services');
    }

    public function missionVisionPage()
    {
        return view('dashboard.about-us.mission-vision');
    }
}
