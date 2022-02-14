<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Coupon;
use App\Models\CouponCategories;
use App\Models\Membership;
use App\Models\User;
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
        // $payments = Membership::where('amount', '>', '51')->paginate(15);
        $vendors = User::where('role', 'Vendor')->paginate(15);
        $details = VendorDetails::orderBy('id', 'desc')->get();
        $count = 1;

        return view('admin.coupon.view', compact('vendors', 'details', 'count'));
    }

    public function update_coupon($vendor_id)
    {        
        $vendor = User::where('id', $vendor_id)->first();
        $coupons = Coupon::where('vendor_id', $vendor_id)->get();

        return view('admin.coupon.update', compact('vendor', 'coupons')); 
    }

    // public function edit_coupon($coupon_id, Request $request)
    // {
    //     $coupons = Coupon::where('id', $coupon_id)->first();

    //     if($request->hasFile('img_name'))
    //     {
    //         $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
    //         $img_name = 'https://hariusahawannegara.com.my/assets/img/coupon/' . $imagename;
    //         $request->img_name->move(public_path('assets/img/coupon'), $imagename);
    //     }

    //     $coupons->vendor_id = $request->vendor_id;
    //     $coupons->coupon_no = $request->coupon_no;
    //     $coupons->category = $request->category;
    //     if($request->hasFile('img_name'))
    //     {
    //         $coupons->img_name = $img_name;
    //     }
    //     $coupons->save();

    //     return redirect('coupon')->with('updatecoupon','Coupon has been updated successfully.'); 
    // }

    public function destroy_coupon($coupon_id){
        $coupons = Coupon::where('id', $coupon_id);
        
        $coupons->delete();
        return redirect('coupon')->with('deletecoupon','Coupon has been deleted successfully.');
    }

    public function category()
    {
        $categories = CouponCategories::orderBy('id', 'asc')->paginate(20);

        return view('admin.coupon.category.view', compact('categories'));
    }

    public function store_category(Request $request)
    {             
        $datavalidation = $request->validate([
            'category_name' => 'required',
            'img_name' => 'required'
        ]);

        $category_path = 'public/admin/coupon_categories';
        $path = 'img_' . uniqid().'.'.$request->file('img_name')->extension();
        $request->file('img_name')->storeAs($category_path, $path);
        $category_image = 'https://hariusahawannegara.com.my/storage/admin/coupon_categories/' . $path;

        CouponCategories::create([
            'category_name' => $request->category_name,
            'img_name' => $category_image
        ]);

        return redirect('view-category')->with('addcategory','Category has been created successfully.');
    }

    public function edit_category($category_id, Request $request)
    {
        $category = CouponCategories::where('id', $category_id)->first();

        if($request->hasFile('img_name'))
        {
            $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
            $img_name = 'https://hariusahawannegara.com.my/assets/img/coupon_categories/' . $imagename;
            $request->img_name->move(public_path('assets/img/coupon_categories'), $imagename);
        }

        $category->category_name = $request->category_name;
        if($request->hasFile('img_name'))
        {
            $category->img_name = $img_name;
        }
        $category->save();

        return redirect('view-category')->with('updatecategory','Category has been updated successfully.'); 
    }

    public function destroy_category($category_id){
        $category = CouponCategories::where('id', $category_id);
        
        $category->delete();
        return redirect('view-category')->with('deletecategory','Category has been deleted successfully.');
    }
}
