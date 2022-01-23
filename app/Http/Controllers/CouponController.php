<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Coupon;

class CouponController extends Controller
{
    public function addCoupon(Request $request){
        return Coupon::insertDB($request);
    }

    public function coupon()
    {
        $coupons = Coupon::orderBy('id', 'desc')->paginate(15);
        return view('admin.coupon.view', compact('coupons'));
    }
}
