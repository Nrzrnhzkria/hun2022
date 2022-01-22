<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VendorDetails;
use App\Models\Coupon;

class VendorController extends Controller
{
    /*
    |   This controller is for managing vendor details
    */

    public function register()
    {
        return view('landingpage.register.check_ic');
    }

    // Check if ic exist
    public function check_ic(Request $request)
    {
        if(User::where('ic_no', $request->ic_no)->exists()){

            // dd('Update Registration');
            $vendor = User::where('ic_no', $request->ic_no)->first();
            return redirect('update-registration/' . $vendor->id);

        }else{

            // dd('New Registration');
            return redirect('new-registration/' . $request->ic_no);

        }
    }

    //----------------------------------- New Vendor -----------------------------------//

    public function new_register($get_ic, Request $request)
    {
        $vendor_ic = $get_ic;
        $vendor = $request->session()->get('users');
        $details = $request->session()->get('vendor_details');
        $coupon = $request->session()->get('coupon');

        // generate id
        $vendor_id = 'VND'.uniqid();
        $details_id = 'DID'.uniqid();
        $coupon_id = 'CID'.uniqid();
  
        return view('landingpage.register.new_vendor', compact('vendor', 'details', 'coupon', 'vendor_ic', 'vendor_id', 'details_id', 'coupon_id'));
    }

    public function store(Request $request)
    {
        $validatedVendor = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'ic_no' => 'required',
            'role'=> 'required'
        ]);

        $validatedDetails = $request->validate([
            'user_id' => 'required',
            'company_name'=> 'required',
            'designation' => 'required',
            'nationality'=> 'required',
            'company_address'=> 'required',
            'business_nature' => 'required',
            // 'product_details' => 'required',
            // 'ssm_cert' => 'required',
            // 'vaccine_cert' => 'required'
        ]);
        
        $optionCoupon = array(
            'vendor_id' => $request->user_id,
            'coupon_no' => $request->coupon_no,
            'img_name' => $request->img_name,
            'category' => $request->category
        );

        $request->session()->get('users');
        $vendor = new User();
        $vendor->fill($validatedVendor);
        $request->session()->put('users', $vendor);

        $request->session()->get('vendor_details');
        $details = new VendorDetails();
        $details->fill($validatedDetails);
        $request->session()->put('vendor_details', $details);
        
        $request->session()->get('coupon');
        $coupon = new Coupon();
        $coupon->fill($optionCoupon);
        $request->session()->put('coupon', $coupon);
    
        return redirect('choose-booth');


        // $vendors = User::orderBy('id','desc')->first();
        // $details = VendorDetails::orderBy('id','desc')->first();

        // $auto_inc_vendor = $vendors->id + 1;
        // $vendor_id = 'UID' . 0 . 0 . $auto_inc_vendor;
        // // $vendor_id = 'VN' . 0 . 0 . 1;

        // User::create([
        //     'user_id' => $vendor_id,
        //     'name' => $request->name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email
        // ]);

        // // $auto_inc_details = $details->id + 1;
        // // $details_id = 'DID' . 0 . 0 . $auto_inc_details;
        // $details_id = 'VN' . 0 . 0 . 1;
        // VendorDetails::create([
        //     'details_id' => $details_id,
        //     'company_name' => $request->company_name,
        //     'designation' => $request->designation,
        //     'user_id' => $vendor_id,
        //     'phone_no' => $request->phone_no,
        //     'membership_id' => $request->membership_id,
        //     'ssm_no' => $request->ssm_no
        // ]);

        // return redirect('view-vendor')->with('create', 'Your account has been registered successfully.');
    }
    
    public function booth(Request $request)
    {
        $vendor = $request->session()->get('users');
        $details = $request->session()->get('vendor_details');
        $coupon = $request->session()->get('coupon');
  
        dd($details);
        // return view('landingpage.register.new_booth',compact('vendor', 'details', 'coupon'));
    }

    public function edit($vendor_id)
    {
        $vendor = Vendor::where('vendor_id', $vendor_id)->first();
        $count = 1;

        return view('vendors.edit', compact('vendor', 'count'));        
    }

    public function update($vendor_id, Request $request)
    {
        $vendor = Vendor::where('vendor_id', $vendor_id)->first();    
        
        $vendor->first_name = $request->first_name;
        $vendor->last_name = $request->last_name;
        $vendor->ic_no = $request->ic_no;
        $vendor->email = $request->email;
        $vendor->phone_no = $request->phone_no;
        $vendor->membership = $request->membership;
        $vendor->save();

        return redirect('view-vendor')->with('update', 'Vendor has been updated successfully.');
    }

    public function destroy($vendor_id)
    {
        $vendor = Vendor::where('vendor_id', $vendor_id);
        $vendor->delete();

        return back()->with('delete', 'Vendor has been updated successfully.');
    }

    
    //----------------------------------- Existing Vendor -----------------------------------//
    public function update_register($user_id, Request $request){

        $vendor = User::where('id', $user_id)->first();
        $user = $request->session()->get('user');

        return view('landingpage.register.exist_vendor', compact('vendor', 'user' ));

    }

}
