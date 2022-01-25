<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Auth;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function media()
    {
        $medias = Media::orderBy('id', 'desc')->paginate(15);
        return view('admin.media.view', compact('medias'));
    }

    public function create_media()
    {
        return view('admin.media.create');
    }

    public function store_media(Request $request)
    {        
		$user_id = Auth::user()->id;

        $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
        $media_image = 'https://hariusahawannegara.com.my/assets/img/media/' . $imagename;
        $request->img_name->move(public_path('assets/img/media'), $imagename);

        $this->validate($request, [
            'title' => 'required|string|max:100',
            'teaser' => 'required|string|max:250',
        ]);

        Media::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'content' => $request->content,
            'teaser' => $request->teaser,
            'img_name' => $news_image,
        ]);

        return redirect('admin-media')->with('addmedia','Media has been created successfully.');
    }

    public function update_media($media_id)
    {
        $media = Media::where('id', $media_id)->first();

        return view('admin.media.update', compact('media')); 
    }

    public function edit_media($media_id, Request $request)
    {
        $media = Media::where('id', $media_id)->first();
        $user_id = Auth::user()->id;

        if($request->hasFile('img_name'))
        {
            $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
            $img_name = 'https://hariusahawannegara.com.my/assets/img/media/' . $imagename;
            $request->img_name->move(public_path('assets/img/media'), $imagename);
        }

        $media->user_id = $user_id;
        $media->title = $request->title;
        $media->content = $request->content;
        $media->teaser = $request->teaser;
        if($request->hasFile('img_name'))
        {
            $media->img_name = $img_name;
        }
        $media->save();

        return redirect('admin-media')->with('updatemedia','Media has been updated successfully.'); 
    }

    public function destroy_media($media_id){
        $media = Media::where('id', $media_id);
        
        $media->delete();
        return redirect('admin-media')->with('deletemedia','Media has been deleted successfully.');
    }
}
