<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Coupon;
use App\Models\Redeem;
use App\Models\VendorDetails;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addCoupon(Request $request){
        return Coupon::insertDB($request);
    }

    public function coupon()
    {
        $coupons = Coupon::orderBy('id', 'desc')->paginate(15);        
        $vendors = VendorDetails::orderBy('id', 'desc')->get();
        // $redeems = Redeem::where('coupon_id', $coupons->id)->count();

        dd($coupons->id);
        // return view('admin.coupon.view', compact('coupons', 'vendors', 'redeems'));
    }

    public function update_coupon($coupon_id)
    {
        $coupons = Coupon::where('id', $coupon_id)->first();

        return view('admin.coupon.update', compact('coupons')); 
    }

    public function edit_coupon($coupon_id, Request $request)
    {
        $coupons = Coupon::where('id', $coupon_id)->first();

        if($request->hasFile('img_name'))
        {
            $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
            $img_name = 'https://hariusahawannegara.com.my/assets/img/coupon/' . $imagename;
            $request->img_name->move(public_path('assets/img/coupon'), $imagename);
        }

        $coupons->vendor_id = $request->vendor_id;
        $coupons->coupon_no = $request->coupon_no;
        $coupons->category = $request->category;
        if($request->hasFile('img_name'))
        {
            $coupons->img_name = $img_name;
        }
        $coupons->save();

        return redirect('coupon')->with('updatecoupon','Coupon has been updated successfully.'); 
    }

    public function destroy_coupon($coupon_id){
        $coupons = Coupon::where('id', $coupon_id);
        
        $coupons->delete();
        return redirect('coupon')->with('deletecoupon','Coupon has been deleted successfully.');
    }
}
