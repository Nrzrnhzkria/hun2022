<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\HUNNews;

class HUNNewsController extends Controller
{
    public function news()
    {
        $news = HUNNews::orderBy('id', 'asc')->paginate(15);
        return view('admin.news.view', compact('news'));
    }
}
