<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function news()
    {
        return view('admin.news.view');
    }

    public function seminars()
    {
        return view('admin.seminars.view');
    }

    public function vendors()
    {
        return view('admin.vendors.view');
    }

    public function users()
    {
        return view('admin.users.view');
    }

}
