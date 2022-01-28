<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeminarQR;
use App\Models\SeminarAttendance;

class SeminarAttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function attendance()
    {
        $seminars = SeminarQR::orderBy('id', 'desc')->paginate(15);

        return view('admin.seminars.attendance.view', compact('seminars'));
    }
    
}
