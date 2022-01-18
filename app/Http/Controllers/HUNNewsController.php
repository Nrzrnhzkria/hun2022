<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HUNNews;
use Auth;

class HUNNewsController extends Controller
{
    public function news()
    {
        $news = HUNNews::orderBy('id', 'asc')->paginate(15);
        return view('admin.news.view', compact('news'));
    }

    public function create_news()
    {
        return view('admin.news.create');
    }

    public function store_news(Request $request)
    {        
		$user_id = Auth::user()->id;

        $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
        $news_image = 'https://mims.momentuminternet.my/assets/img/news/' . $imagename;
        $request->img_name->move(public_path('assets/img/news'), $imagename);

        HUNNews::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'content' => $request->content,
            'teaser' => $request->teaser,
            'img_name' => $news_image,
        ]);

        return redirect('admin-news')->with('addnews','News has been created successfully.');
    }

    public function update_news($news_id)
    {
        $news = HUNNews::where('id', $news_id)->first();

        return view('admin.news.update', compact('news')); 
    }

    public function edit_news($news_id, Request $request)
    {
        $news = HUNNews::where('id', $news_id)->first();
        $user_id = Auth::user()->id;

        if($request->hasFile('img_name'))
        {
            $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
            $img_name = 'https://mims.momentuminternet.my/assets/img/news/' . $imagename;
            $request->img_name->move(public_path('assets/img/news'), $imagename);
        }

        $news->user_id = $user_id;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->teaser = $request->teaser;
        if($request->hasFile('img_name'))
        {
            $news->img_name = $img_name;
        }
        $news->save();

        return redirect('admin-news')->with('updatenews','News has been updated successfully.'); 
    }

    public function destroy_news($news_id){
        $news = HUNNews::where('id', $news_id);
        
        $news->delete();
        return redirect('admin-news')->with('deletenews','News has been deleted successfully.');
    }
}
