<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeEngineerController extends Controller
{
    public function index(Request $request)
    {
        return view('engineer.dashboard.index');
    }
}
