<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTeamleaderController extends Controller
{
    public function index(Request $request)
    {
        return view('teamleader.dashboard.index');
    }
}
