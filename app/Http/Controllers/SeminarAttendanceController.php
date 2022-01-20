<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeminarAttendance;

class SeminarAttendanceController extends Controller
{
    public function attendance()
    {
        $seminars = SeminarAttendance::orderBy('id', 'desc')->paginate(15);
        return view('admin.seminars.attendance.view', compact('seminars'));
    }
    
}
