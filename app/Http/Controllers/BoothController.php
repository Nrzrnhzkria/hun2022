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

    public function store_booth(Request $request)
    {     
        $booth = Booth::orderBy('id','desc')->first(); 
        $auto_inc = $booth->id + 1;
        $booth_id = 'BO' . 0 . $auto_inc;  

        Booth::create([
            'booth_id' => $booth_id,
            'booth_name' => $request->booth_name
        ]);

        return redirect('booth')->with('addbooth','Booth has been created successfully.');
    }

    public function booth_details($booth_id)
    {
        $booth =  Booth::where('booth_id', $booth_id)->first();
        $booth_details =  BoothDetails::where('booth_id', $booth_id)->paginate(15);

        return view('admin.booth.view_details', compact('booth', 'booth_details'));
    }


    public function create_booth_details($booth_id)
    {        
        $booth =  Booth::where('booth_id', $booth_id)->first();

        return view('admin.booth.create_details', compact('booth'));
    }

    public function store_booth_details($booth_id, Request $request)
    {        
        // $booth_details = BoothDetails::orderBy('id','desc')->first(); 
        // $auto_inc = $booth_details->id + 1;
        // $details_id = 'BD' . 0 . $auto_inc;  
        $details_id =  'BD'. 0 . 1;

        Booth::create([
            'details_id' => $details_id,
            'booth_type' => $request->booth_type,
            'lot_placement' => $request->booth_type,
            'price' => $request->price,
            'booth_id' => $booth_id
        ]);

        return redirect('booth')->with('addbooth','Booth has been created successfully.');
    }

    public function update_booth_details($booth_id)
    {
        $booth = Booth::where('booth_id', $booth_id)->first();

        return view('admin.booth.update', compact('booth')); 
    }

    public function edit_booth_details($booth_id, Request $request)
    {
        $booth = Booth::where('booth_id', $booth_id)->first();

        $booth->seminar_name = $request->booth_name;
        $booth->save();

        return redirect('booth')->with('updatebooth','Booth has been updated successfully.'); 
    }

    public function destroy_booth_details($boothv_id){
        $booth = Booth::where('booth_id', $booth_id);
        
        $booth->delete();
        return redirect('booth')->with('deletebooth','Booth has been deleted successfully.');
    }

}
