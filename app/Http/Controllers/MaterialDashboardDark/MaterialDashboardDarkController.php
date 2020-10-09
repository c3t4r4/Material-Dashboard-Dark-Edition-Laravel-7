<?php

namespace App\Http\Controllers\MaterialDashboardDark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialDashboardDarkController extends Controller
{
    public function dashboard()
    {
        return view('MaterialDashboardDark.pages.dashboard');
    }

    public function blank()
    {
        return view('MaterialDashboardDark.pages.blank');
    }

    public function user()
    {
        return view('MaterialDashboardDark.pages.user');
    }

    public function tables()
    {
        return view('MaterialDashboardDark.pages.tables');
    }

    public function typography()
    {
        return view('MaterialDashboardDark.pages.typography');
    }

    public function icons()
    {
        return view('MaterialDashboardDark.pages.icons');
    }

    public function googlemaps()
    {
        return view('MaterialDashboardDark.pages.googlemap');
    }

    public function leafletmaps()
    {
        return view('MaterialDashboardDark.pages.leafletmap');
    }

    public function notifications()
    {
        return view('MaterialDashboardDark.pages.notifications');
    }

    public function upgrade()
    {
        return view('MaterialDashboardDark.pages.upgrade');
    }










}
