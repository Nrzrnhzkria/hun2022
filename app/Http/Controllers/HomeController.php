<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HUNNews;
use App\Models\Media;

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
        $news = HUNNews::orderBy('id', 'desc')->get();
        return view('landingpage.home', compact('news'));
    }

    public function preface()
    {
        return view('landingpage.about.preface');
    }

    public function intro()
    {
        return view('landingpage.about.intro');
    }

    public function events()
    {
        return view('landingpage.events');
    }

    public function news()
    {
        $news = HUNNews::orderBy('id', 'desc')->get();
        return view('landingpage.news.news', compact('news'));
    }

    public function readmore($news_id)
    {
        $news = HUNNews::where('id', $news_id)->first();
        return view('landingpage.news.readmore', compact('news'));
    }

    public function media()
    {
        $medias = Media::orderBy('id', 'desc')->get();
        return view('landingpage.media.media', compact('medias'));
    }

    public function readmedia($media_id)
    {
        $media = Media::where('id', $media_id)->first();
        return view('landingpage.media.readmedia', compact('media'));
    }
    
    public function contact()
    {
        return view('landingpage.contact');
    }

}
