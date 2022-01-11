<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('landingpage.home');
    }

    public function about()
    {
        return view('landingpage.about');
    }

    public function events()
    {
        return view('landingpage.events');
    }

    public function news()
    {
        return view('landingpage.news');
    }

    public function media()
    {
        return view('landingpage.media');
    }
    
    public function contact()
    {
        return view('landingpage.contact');
    }

    public function register()
    {
        return view('landingpage.register.check_ic');
    }
}
