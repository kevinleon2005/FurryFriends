<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdmController extends Controller
{
    public function index(){
        {
            return view('dashboard.admin');
        }
    }
}
