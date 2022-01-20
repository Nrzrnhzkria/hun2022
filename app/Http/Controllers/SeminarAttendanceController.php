<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeminarAttendance;

class SeminarAttendanceController extends Controller
{
    public function seminars()
    {
        $seminars = SeminarAttendance::orderBy('id', 'desc')->paginate(15);
        return view('admin.seminars.view', compact('seminars'));
    }
}
