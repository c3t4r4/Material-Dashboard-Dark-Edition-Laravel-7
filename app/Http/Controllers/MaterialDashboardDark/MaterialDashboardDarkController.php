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

    public function user()
    {
        return view('MaterialDashboardDark.pages.user');
    }


}
