<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeminarQR;

class SeminarQRController extends Controller
{
    // public function addQR(Request $request){
    //     return SeminarQR::insertDB($request);
    // }
    
    public function qrcode()
    {
        $seminarsqr = SeminarQR::orderBy('id', 'desc')->paginate(15);
        return view('admin.seminars.qrcode.view', compact('seminarsqr'));
    }

    public function create_qr()
    {
        return view('admin.seminars.qrcode.create');
    }

    public function store_qr(Request $request)
    {
        SeminarQR::create([
            'location_name' => $request->location_name,
            'qr_value' => $request->qr_value,
            'seminar_date' => $request->seminar_date,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
        ]);

        return redirect('qrcode')->with('addqr','Seminar has been created successfully.');
    }

    public function update_qr($qr_id)
    {
        $qr = SeminarQR::where('id', $qr_id)->first();

        return view('admin.seminars.qrcode.update', compact('user')); 
    }

    public function edit_qr($qr_id, Request $request)
    {
        $qr = SeminarQR::where('id', $qr_id)->first();

        $qr->location_name = $request->location_name;
        $qr->qr_value = $request->qr_value;
        $qr->seminar_date = $request->seminar_date;
        $qr->time_start = $request->time_start;
        $qr->time_end = $request->time_end;
        $qr->save();

        return redirect('qrcode')->with('updateqr','Seminar has been updated successfully.'); 
    }

    public function destroy_user($qr_id){
        $qr = SeminarQR::where('id', $qr_id);
        
        $qr->delete();
        return redirect('qrcode')->with('deleteqr','Seminar has been deleted successfully.');
    }
}
