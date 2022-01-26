<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booth;
use App\Models\BoothDetails;

class BoothController extends Controller
{
    public function booth()
    {
        $booths = Booth::orderBy('id', 'desc')->paginate(15);
        return view('admin.booth.view', compact('booths'));
    }

    public function create_booth()
    {
        return view('admin.booth.create');
    }

    public function store_booth(Request $request)
    {        
        $booth_id = uniqid();

        Booth::create([
            'booth_name' => $request->booth_name
        ]);

        return redirect('booth')->with('addbooth','Booth has been created successfully.');
    }

    public function update_booth($booth_id)
    {
        $booth = Booth::where('booth_id', $booth_id)->first();

        return view('admin.booth.update', compact('booth')); 
    }

    public function edit_booth($booth_id, Request $request)
    {
        $booth = Booth::where('booth_id', $booth_id)->first();

        $booth->seminar_name = $request->booth_name;
        $booth->save();

        return redirect('booth')->with('updatebooth','Booth has been updated successfully.'); 
    }

    public function destroy_booth($boothv_id){
        $booth = Booth::where('booth_id', $booth_id);
        
        $booth->delete();
        return redirect('booth')->with('deletebooth','Booth has been deleted successfully.');
    }

}
