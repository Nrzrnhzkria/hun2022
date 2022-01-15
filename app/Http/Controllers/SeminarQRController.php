<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeminarQR;

class SeminarQRController extends Controller
{
    public function addQR(Request $request){
        return SeminarQR::insertDB($request);
    }
}
