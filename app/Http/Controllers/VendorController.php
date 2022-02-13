<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VendorDetails;
use App\Models\Coupon;
use App\Models\CouponCategories;
use App\Models\Membership;
use App\Models\Booth;
use App\Models\BoothDetails;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

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
        $check = User::where('ic_no', $request->ic_no)->first();

        if(User::where('ic_no', $request->ic_no)->exists() && Membership::where('payer_id', $check->id)->where('status', 'success')->first()){

            return redirect('update-registration/' . $check->id);

        }elseif(User::where('ic_no', $request->ic_no)->exists() && Membership::where('payer_id', $check->id)->where('status', 'failed')->orWhere('status', NULL)->first()){
            
            return redirect('update-payment/' . $check->id);
            
        }else{

            return redirect('new-registration/' . $request->ic_no);

        }
    }

    //----------------------------------- New Vendor -----------------------------------//

    public function new_register($get_ic, Request $request)
    {
        $vendor_ic = $get_ic;

        $booth = Booth::orderBy('id', 'desc')->get();
        $booth_details = BoothDetails::orderBy('id', 'desc')->get();
        $categories = CouponCategories::orderBy('id', 'desc')->get();

        $count = 1;

        return view('landingpage.register.new_vendor', compact('booth', 'booth_details', 'count', 'vendor_ic', 'categories'));
    }

    public function store_vendor($get_ic, Request $request){

        $booth_details = BoothDetails::where('details_id', $request->details_id)->first();

        $datavalidation = $request->validate([
            'name' => 'required',
            'email'=> 'required|unique:users,email',
            'password'=> 'required',
            'ic_no' => 'required',
            'phone_no' => 'required',
            'role'=> 'required',
            'company_name'=> 'required',
            'designation' => 'required',
            'nationality'=> 'required',
            'company_address'=> 'required',
            'business_nature' => 'required',
            'product_details' => 'required|mimes:docx,csv,pdf,png,jpeg|max:1024',
            'ssm_cert' => 'required|mimes:docx,csv,pdf,png,jpeg|max:1024',
            'vaccine_cert' => 'required|mimes:docx,csv,pdf,png,jpeg|max:1024'
        ]);

        User::create([
            'hun_id' => NULL,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->ic_no),
            'phone_no' => $request->phone_no,
            'ic_no' => $request->ic_no,
            'role' => 'Vendor',
        ]);        

        $vendor = User::where('ic_no', $request->ic_no)->first();

        $product_path = 'public/files/product_details';
        $path_1 = 'file_' . uniqid().'.'.$request->file('product_details')->extension();
        $request->file('product_details')->storeAs($product_path, $path_1);
        $product_details = 'https://hariusahawannegara.com.my/storage/files/product_details/' . $path_1;

        // $product_details = 'file_' . uniqid() . $request->file('product_details')->getClientOriginalName();
        // $path_1 = $request->file('product_details')->store('public/files/product_details') . $product_details;
        // $details_path = 'https://hariusahawannegara.com.my/storage/files/product_details' . $product_details;
        // // $request->file('product_details')->move(public_path('assets/files/product_details') . $product_details);
        
        $ssm_path = 'public/files/ssm_cert';
        $path_2 = 'file_' . uniqid().'.'.$request->file('ssm_cert')->extension();
        $request->file('ssm_cert')->storeAs($ssm_path, $path_2);
        $ssm_cert = 'https://hariusahawannegara.com.my/storage/files/ssm_cert/' . $path_2;

        // $ssm_image = 'file_' . uniqid() . $request->file('ssm_cert')->getClientOriginalName();
        // $path_2 = $request->file('ssm_cert')->store('public/files/ssm_cert') . $ssm_image;
        // $ssm_cert = 'https://hariusahawannegara.com.my/storage/files/ssm_cert' . $ssm_image;
        // // $request->file('ssm_cert')->move(public_path('assets/files/ssm_cert') . $ssm_image);
                
        $vaccine_path = 'public/files/vaccine_cert';
        $path_3 = 'file_' . uniqid().'.'.$request->file('vaccine_cert')->extension();
        $request->file('vaccine_cert')->storeAs($vaccine_path, $path_3);
        $vaccine_cert = 'https://hariusahawannegara.com.my/storage/files/vaccine_cert/' . $path_3;

        // $vaccine_image = 'file_' . uniqid() . $request->file('vaccine_cert')->getClientOriginalName();
        // $path_3 = $request->file('vaccine_cert')->store('public/files/vaccine_cert') . $vaccine_image;
        // $vaccine_cert = 'https://hariusahawannegara.com.my/storage/files/vaccine_cert' . $vaccine_image;
        // // $request->file('vaccine_cert')->move(public_path('assets/files/vaccine_cert') . $vaccine_image);
        VendorDetails::create([
            'user_id' => $vendor->id,
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'nationality' => $request->nationality,
            'company_address' => $request->company_address,
            'business_nature' => $request->business_nature,
            'product_details' => $product_details,
            'ssm_cert' => $ssm_cert,
            'vaccine_cert' => $vaccine_cert
        ]);
        
        if($request->img_name == null){

            // if($request->category == null){

            //     Coupon::create([
            //         'vendor_id' => $vendor->id,
            //         'coupon_no' => 0,
            //         'img_name' => 'no value',
            //         'category' => 'no value'
            //     ]);

            // }else{

            //     Coupon::create([
            //         'vendor_id' => $vendor->id,
            //         'coupon_no' => 0,
            //         'img_name' => 'no value',
            //         'category' => $request->category
            //     ]);

            // }

        }else{

            foreach($request->file('img_name') as $values) {

                $destination_path = 'public/files/coupons';
                $imagename = 'img_' . uniqid().'.'.$values->extension();
                $path_4 = $values->storeAs($destination_path, $imagename);
                $coupon_image = 'https://hariusahawannegara.com.my/storage/files/coupons/' . $imagename;

                $i=1;

                Coupon::create([
                    'vendor_id' => $vendor->id,
                    'coupon_no' => $i++,
                    'img_name' => $coupon_image,
                    'category' => $request->category
                ]);

            }

        }

        Membership::create([
            'payer_id' => $vendor->id,
            'amount' => $booth_details->price,
            'senangpay_id' => 'no value',
            'booth_id' => $booth_details->booth_id,
            'details_id' => $request->details_id,
        ]); 

        // dd($booth_details);
        return redirect('payment/' . $get_ic); 
    }

    public function create_bill($get_ic, Request $request){
        $vendor = User::where('ic_no', $get_ic)->first();
        $payment = Membership::where('payer_id', $vendor->id)->first();
        $booth_id = $payment->booth_id;
        $details_id = $payment->details_id;
        $booth_name = Booth::where('booth_id', $booth_id)->first();
        $booth_type = BoothDetails::where('details_id', $details_id)->first();

        $bill_id = 'ID'.uniqid();

        $payment->senangpay_id = $bill_id;
        $payment->save();
        
        $amount = ($payment->amount)*100;

        $data = array(
            'userSecretKey' => config('toyyibpay.key'),
            'categoryCode' => config('toyyibpay.category'),
            // 'userSecretKey' => 'a25txcs8-x59p-adcl-xwz7-1d3grr2p6c1p',
            // 'categoryCode' => 'vokse6qd',
            'billName' => 'HUN Vendor Registration',
            'billDescription' => $booth_name->booth_name . ' - ' . $booth_type->booth_type,
            'billPriceSetting' => 1,
            'billPayorInfo' => 1,
            'billAmount' => $amount,
            'billReturnUrl' => 'https://hariusahawannegara.com.my/payment-status',
            'billCallbackUrl' => 'https://hariusahawannegara.com.my/payment-callback',
            'billExternalReferenceNo' => $bill_id,
            'billTo' => $vendor->name,
            'billEmail' => $vendor->email,
            'billPhone' => $vendor->phone_no, // cannot null or 0
            'billSplitPayment' => 0,
            'billSplitPaymentArgs' => '',
            'billPaymentChannel' => 2,
            'billContentEmail' => 'Thank you for registering to HUN!',
            'billChargeToCustomer' => 2
        );

        $url = 'https://toyyibpay.com/index.php/api/createBill';
        $response = Http::asForm()->post($url, $data);
        $bill_code = $response->json()[0]['BillCode'];

        // dd($amount);
        // dd($response->json()); // to know error
        return redirect('https://toyyibpay.com/' . $bill_code); // return url
    }

    public function payment_status(Request $request){
        $response = request()->all();
        // return $response;
        $status = request()->status_id;
        $bill_id = request()->order_id;
        $toyyib_billcode = request()->billcode;

        $payment = Membership::where('senangpay_id', $bill_id)->first();

        if($status == 1){
            
            $payment->status = 'success';
            $payment->toyyib_billcode = $toyyib_billcode;
            $payment->save();

            return view('landingpage.register.success');

        }else{

            $payment->status = 'failed';
            $payment->toyyib_billcode = $toyyib_billcode;
            $payment->save();

            return view('landingpage.register.failed');
        }
        
    }

    public function callback(){
        $response = request()->all(['refno', 'status', 'reason', 'billcode', 'order_id', 'amount']);
        Log::info($response);
    }

    // public function store(Request $request)
    // {
    //     $datavalidation = $request->validate([
    //         'name' => 'required',
    //         'email'=> 'required|unique:users,email',
    //         'password'=> 'required',
    //         'ic_no' => 'required',
    //         'phone_no' => 'required',
    //         'role'=> 'required',
    //         'company_name'=> 'required',
    //         'designation' => 'required',
    //         'nationality'=> 'required',
    //         'company_address'=> 'required',
    //         'business_nature' => 'required',
    //         'product_details' => 'required|mimes:docx,csv,txt,xlx,xls,pdf|max:2048',
    //         'ssm_cert' => 'required|mimes:docx,csv,txt,xlx,xls,pdf|max:2048',
    //         'vaccine_cert' => 'required|mimes:docx,csv,txt,xlx,xls,pdf|max:2048'
    //     ]);

    //     $vendorData = array(
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'ic_no' => $request->ic_no,
    //         'phone_no' => $request->phone_no,
    //         'role' => $request->role
    //     );

    //     // $validatedDetails = $request->validate([
    //     // ]);

    //     $product_details = 'file_' . uniqid() . $request->file('product_details')->getClientOriginalName();
    //     $details_path = 'https://hariusahawannegara.com.my/assets/files/product_details/' . $product_details;
    //     $request->file('product_details')->move(public_path('assets/files/product_details') . $product_details);

    //     $ssm_image = 'file_' . uniqid() . $request->file('ssm_cert')->getClientOriginalName();
    //     $ssm_cert = 'https://hariusahawannegara.com.my/assets/files/ssm_cert/' . $ssm_image;
    //     $request->file('ssm_cert')->move(public_path('assets/files/ssm_cert') . $ssm_image);

    //     $vaccine_image = 'file_' . uniqid() . $request->file('vaccine_cert')->getClientOriginalName();
    //     $vaccine_cert = 'https://hariusahawannegara.com.my/assets/files/vaccine_cert/' . $vaccine_image;
    //     $request->file('vaccine_cert')->move(public_path('assets/files/vaccine_cert') . $vaccine_image);

    //     // $ssm_image = 'img_' . uniqid().'.'.$request->ssm_cert->extension();
    //     // $ssm_cert = 'https://hariusahawannegara.com.my/assets/files/ssm/' . $ssm_image;
    //     // $request->ssm_cert->move(public_path('assets/files/ssm'), $ssm_image);
        
    //     // $vaccine_image = 'img_' . uniqid().'.'.$request->vaccine_cert->extension();
    //     // $vaccine_cert = 'https://hariusahawannegara.com.my/assets/files/vaccine/' . $vaccine_image;
    //     // $request->vaccine_cert->move(public_path('assets/files/vaccine'), $vaccine_image);

    //     $detailsData = array(
    //         'company_name' => $request->company_name,
    //         'designation' => $request->designation,
    //         'nationality' => $request->nationality,
    //         'company_address' => $request->company_address,
    //         'business_nature' => $request->business_nature,
    //         'product_details' => $details_path,
    //         'ssm_cert' => $ssm_cert,
    //         'vaccine_cert' => $vaccine_cert
    //     );

    //     $request->session()->get('users');
    //     $vendor = new User();
    //     $vendor->fill($vendorData);
    //     $request->session()->put('users', $vendor);

    //     $request->session()->get('vendor_details');
    //     $details = new VendorDetails();
    //     $details->fill($detailsData);
    //     $request->session()->put('vendor_details', $details);

    //     $check_image = $request->img_name;
        
    //     if($check_image == null){

    //         $optionCoupon = array(
    //             'coupon_no' => 0,
    //             'category' => $request->category
    //         );
            
    //         $request->session()->get('coupon');
    //         $coupon = new Coupon();
    //         $coupon->fill($optionCoupon);
    //         $request->session()->put('coupon', $coupon);

    //     }else{

    //         foreach($request->file('img_name') as $values) {
    //             $imagename = 'img_' . uniqid().'.'.$values->extension();
    //             $coupon_image = 'https://hariusahawannegara.com.my/assets/files/coupons/' . $imagename;
    //             $values->move(public_path('assets/files/coupons'), $imagename);

    //             $i=1;

    //             $optionCoupon = array(
    //                 'coupon_no' => $i++,
    //                 'img_name' => $coupon_image,
    //                 'category' => $request->category
    //             );
                
    //             $request->session()->get('coupon');
    //             $coupon = new Coupon();
    //             $coupon->fill($optionCoupon);
    //             $request->session()->put('coupon', $coupon);
    //         }

    //     }
    
    //     dd($coupon);
    //     // return redirect('choose-booth');
    // }
    
    // public function booth(Request $request)
    // {
    //     $vendor = $request->session()->get('users');
    //     $details = $request->session()->get('vendor_details');
    //     $coupon = $request->session()->get('coupon');
    //     $payment = $request->session()->get('payment');
  
    //     return view('landingpage.register.new_booth',compact('vendor', 'details', 'coupon'));
    // }

    // public function store_booth(Request $request)
    // {
    //     $details = $request->session()->get('vendor_details');

    //     $paymentData = array(
    //         'amount' => $request->amount
    //     );       
        
    //     $request->session()->get('payment');
    //     $payment = new Membership();
    //     $payment->fill($paymentData);
    //     $request->session()->put('payment', $payment);

    //     return redirect('payment');
    // }

    // public function create_bill(Request $request){
    //     $vendor = $request->session()->get('users');
    //     $bill_id = 'ID'.uniqid();

    //     $paymentData = array(
    //         'senangpay_id' => $bill_id,
    //     );       
        
    //     $payment = $request->session()->get('payment');
    //     $payment->fill($paymentData);
    //     $request->session()->put('payment', $payment);

    //     $amount = ($payment->amount)*100;

    //     $data = array(
    //         // 'userSecretKey' => config('toyyibpay.key'),
    //         // 'categoryCode' => config('toyyibpay.category'),
    //         'userSecretKey' => 'a25txcs8-x59p-adcl-xwz7-1d3grr2p6c1p',
    //         'categoryCode' => 'vokse6qd',
    //         'billName' => 'HUN Vendor Registration',
    //         'billDescription' => 'Hari Usahawan Negara 2022',
    //         'billPriceSetting' => 1,
    //         'billPayorInfo' => 1,
    //         'billAmount' => $amount,
    //         'billReturnUrl' => 'https://hariusahawannegara.com.my/payment-status',
    //         'billCallbackUrl' => 'https://hariusahawannegara.com.my/payment-callback',
    //         'billExternalReferenceNo' => $bill_id,
    //         'billTo' => $vendor->name,
    //         'billEmail' => $vendor->email,
    //         'billPhone' => $vendor->phone_no, // cannot null or 0
    //         'billSplitPayment' => 0,
    //         'billSplitPaymentArgs' => '',
    //         'billPaymentChannel' => 2,
    //         'billContentEmail' => 'Thank you for registering to HUN!',
    //         'billChargeToCustomer' => 2
    //     );

    //     $url = 'https://dev.toyyibpay.com/index.php/api/createBill';
    //     $response = Http::asForm()->post($url, $data);
    //     $bill_code = $response->json()[0]['BillCode'];

    //     // dd($amount);
    //     // dd($response->json()); // to know error
    //     return redirect('https://dev.toyyibpay.com/' . $bill_code); // return url
    // }

    // public function payment_status(Request $request){
    //     $vendor = $request->session()->get('users');
    //     $details = $request->session()->get('vendor_details');
    //     $coupon = $request->session()->get('coupon');
    //     $payment = $request->session()->get('payment');
    //     // $response = request()->all(['status_id', 'billcode', 'order_id']);
    //     // return $response;
    //     $response = request()->status_id;

    //     if($response == 1){
            
    //         $vendor->save();

    //         $detailsData = array(
    //             'user_id' => $vendor->id
    //         );
    //         $details->fill($detailsData);
    //         $request->session()->put('vendor_details', $details);
    //         $details->save();

    //         $optionCoupon = array(
    //             'vendor_id' => $vendor->id
    //         );
    //         $coupon->fill($optionCoupon);
    //         $request->session()->put('coupon', $coupon);
    //         $coupon->save();

    //         $paymentData = array(
    //             'payer_id' => $vendor->id
    //         );       
    //         $payment->fill($paymentData);
    //         $request->session()->put('payment', $payment);
    //         $payment->save();

    //         $request->session()->forget('vendor');
    //         $request->session()->forget('details');
    //         $request->session()->forget('coupon');
    //         $request->session()->forget('payment');

    //         return view('landingpage.register.success');

    //     }else{

    //         $request->session()->forget('vendor');
    //         $request->session()->forget('details');
    //         $request->session()->forget('coupon');
    //         $request->session()->forget('payment');

    //         return view('landingpage.register.failed');
    //     }
        
    // }

    // public function callback(){
    //     $response = request()->all(['refno', 'status', 'reason', 'billcode', 'order_id', 'amount']);
    //     Log::info($response);
    // }

    
    //----------------------------------- Existing Vendor -----------------------------------//
    public function update_register($user_id, Request $request){

        $vendor = User::where('id', $user_id)->first();
        $details = VendorDetails::where('user_id', $user_id)->first();
        $payment = Membership::where('payer_id', $user_id)->first();
        $coupon = Coupon::where('vendor_id', $user_id)->get();

        $booth_id = $payment->booth_id;
        $details_id = $payment->details_id;
        $booth_name = Booth::where('booth_id', $booth_id)->first();
        $booth_type = BoothDetails::where('details_id', $details_id)->first();

        // $vendor = $request->session()->get('users');
        // $details = $request->session()->get('vendor_details');
        // $coupon = $request->session()->get('coupon');
  
        return view('landingpage.register.exist_vendor', compact('vendor', 'details', 'payment', 'coupon', 'booth_name', 'booth_type'));
    }

    public function store_update($user_id, Request $request)
    {
        $vendor = User::where('id', $user_id)->first();
        $coupon = Coupon::where('vendor_id', $user_id)->first();

        if($request->img_name == null){

            // if($request->category == null){

            //     $coupon->coupon_no = 0;
            //     $coupon->img_name = 'no value';
            //     $coupon->category = 'no value';
            //     $coupon->save();

            // }else{

            //     $coupon->coupon_no = 0;
            //     $coupon->img_name = 'no value';
            //     $coupon->category = $request->category;
            //     $coupon->save();

            // }

        }else{

            foreach($request->file('img_name') as $values) {
                // $imagename = 'img_' . uniqid().'.'.$values->extension();
                // $coupon_image = 'https://hariusahawannegara.com.my/assets/files/coupons/' . $imagename;
                // $values->move(public_path('assets/files/coupons'), $imagename);

                $datavalidation = $request->validate([
                    'category' => 'required',
                    'img_name' => 'required|max:1024'
                ]);

                $destination_path = 'public/files/coupons';
                $imagename = 'img_' . uniqid().'.'.$values->extension();
                $path_5 = $values->storeAs($destination_path, $imagename);
                $coupon_image = 'https://hariusahawannegara.com.my/storage/files/coupons/' . $imagename;

                $i=1;

                Coupon::create([
                    'vendor_id' => $user_id,
                    'coupon_no' => $i++,
                    'img_name' => $coupon_image,
                    'category' => $request->category
                ]);

            }

        }

        // $validatedVendor = $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required',
        //     'ic_no' => 'required',
        //     'phone_no' => 'required',
        //     'role'=> 'required'
        // ]);

        // $validatedDetails = $request->validate([
        //     'user_id' => 'required',
        //     'company_name'=> 'required',
        //     'designation' => 'required',
        //     'nationality'=> 'required',
        //     'company_address'=> 'required',
        //     'business_nature' => 'required',
        //     'product_details' => 'required|mimes:docx,csv,txt,xlx,xls,pdf|max:2048',
        //     'ssm_cert' => 'required',
        //     'vaccine_cert' => 'required'
        // ]);

        // $product_details = 'file_' . uniqid() . $request->file('product_details')->getClientOriginalName();
        // $details_path = 'https://hariusahawannegara.com.my/assets/files/product_details/' . $product_details;
        // $request->file('product_details')->move(public_path('assets/files/product_details') . $product_details);

        // $ssm_image = 'img_' . uniqid().'.'.$request->ssm_cert->extension();
        // $ssm_cert = 'https://hariusahawannegara.com.my/assets/files/ssm/' . $ssm_image;
        // $request->ssm_cert->move(public_path('assets/files/ssm'), $ssm_image);
        
        // $vaccine_image = 'img_' . uniqid().'.'.$request->vaccine_cert->extension();
        // $vaccine_cert = 'https://hariusahawannegara.com.my/assets/files/vaccine/' . $vaccine_image;
        // $request->vaccine_cert->move(public_path('assets/files/vaccine'), $vaccine_image);

        // $detailsData = array(
        //     'user_id' => $request->user_id,
        //     'company_name' => $request->company_name,
        //     'designation' => $request->designation,
        //     'nationality' => $request->nationality,
        //     'company_address' => $request->company_address,
        //     'business_nature' => $request->business_nature,
        //     'product_details' => $details_path,
        //     'ssm_cert' => $ssm_cert,
        //     'vaccine_cert' => $vaccine_cert
        // );

        // $imagename = 'img_' . uniqid().'.'.$request->img_name->extension();
        // $coupon_image = 'https://hariusahawannegara.com.my/assets/files/coupons/' . $imagename;
        // $request->img_name->move(public_path('assets/files/coupons'), $imagename);

        // $optionCoupon = array(
        //     'vendor_id' => $request->user_id,
        //     'coupon_no' => $request->coupon_no,
        //     'img_name' => $coupon_image,
        //     'category' => $request->category
        // );

        // $request->session()->get('users');
        // $vendor = User::where('id', $user_id,)->first();
        // $vendor->fill($validatedVendor);
        // $request->session()->put('users', $vendor);

        // $request->session()->get('vendor_details');
        // $details = VendorDetails::where('user_id', $user_id,)->first();
        // $details->fill($detailsData);
        // $request->session()->put('vendor_details', $details);
        
        // $request->session()->get('coupon');
        // $coupon = Coupon::where('vendor_id', $user_id,)->first();
        // $coupon->fill($optionCoupon);
        // $request->session()->put('coupon', $coupon);
            // dd($coupon);
        return redirect('update-registration/'.  $user_id)->with('update','Your registration has been updated successfully.');
    }

    //----------------------------------- Update Pending Payment -----------------------------------//
    public function update_payment($user_id, Request $request){
  
        $payment = Membership::where('payer_id', $user_id)->first();
        return view('landingpage.register.pending_payment', compact('payment'));

    }

}
