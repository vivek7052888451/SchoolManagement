<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentDashboardController extends Controller
{
   public function index()
    {
        return view('backend.dashboard.parent.index');
    }
}
