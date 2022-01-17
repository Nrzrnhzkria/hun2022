<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $users = User::orderBy('id', 'asc')->paginate(15);
        return view('admin.users.view', compact('users'));
    }

}
