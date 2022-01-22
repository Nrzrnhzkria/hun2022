<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VendorDetails;
use App\Models\Coupon;
use App\Models\Membership;
use Illuminate\Support\Facades\Http;

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

    }
    
    public function booth(Request $request)
    {
        $vendor = $request->session()->get('users');
        $details = $request->session()->get('vendor_details');
        $coupon = $request->session()->get('coupon');
        $payment = $request->session()->get('payment');
  
        return view('landingpage.register.new_booth',compact('vendor', 'details', 'coupon'));
    }

    public function store_booth(Request $request)
    {
        $details = $request->session()->get('vendor_details');

        $paymentData = array(
            'payer_id' => $details->user_id,
            'amount' => $request->amount
        );       
        
        $request->session()->get('payment');
        $payment = new Membership();
        $payment->fill($paymentData);
        $request->session()->put('payment', $payment);

        return redirect('payment');
    }

    public function create_bill(Request $request){
        $vendor = $request->session()->get('users');
        $bill_id = 'ID'.uniqid();

        $paymentData = array(
            'senangpay_id' => $bill_id,
        );       
        
        $payment = $request->session()->get('payment');
        $payment->fill($paymentData);
        $request->session()->put('payment', $payment);

        $amount = ($payment->amount)*100;

        $data = array(
            'userSecretKey' => config('toyyibpay.key'),
            'categoryCode' => config('toyyibpay.category'),
            'billName' => 'HUN Registration',
            'billDescription'=>'Hari Usahawan Negara 2022',
            'billPriceSetting'=>1,
            'billPayorInfo'=>1,
            'billAmount'=>$amount,
            'billReturnUrl'=>'https://hariusahawannegara.com.my/payment-status',
            'billCallbackUrl'=>'https://hariusahawannegara.com.my/payment-callback',
            'billExternalReferenceNo' => $bill_id,
            'billTo'=>$vendor->name,
            'billEmail'=>$vendor->email,
            'billPhone'=>'0123456789', // cannot null or 0
            'billSplitPayment'=>0,
            'billSplitPaymentArgs'=>'',
            'billPaymentChannel'=>2,
            'billContentEmail'=>'Thank you for registering to HUN!',
            'billChargeToCustomer'=>2
        );

        $url = 'https://toyyibpay.com/index.php/api/createBill';
        $response = Http::asForm()->post($url, $data);
        $bill_code = $response->json()[0]['BillCode'];

        // dd($response->json());
        return redirect('https://toyyibpay.com/' . $bill_code);
    }

    public function payment_status(Request $request){
        // $vendor = $request->session()->get('users');
        // $details = $request->session()->get('vendor_details');
        // $coupon = $request->session()->get('coupon');
        // $payment = $request->session()->get('payment');
        // // $response = request()->all(['status_id', 'billcode', 'order_id']);
        // // return $response;

        // $vendor->save();
        // $details->save();
        // $coupon->save();
        // $payment->save();

        // $request->session()->forget('vendor');
        // $request->session()->forget('details');
        // $request->session()->forget('coupon');
        // $request->session()->forget('payment');

        return view('landingpage.register.success');
    }

    public function callback(){
        $response = request()->all(['refno', 'status', 'reason', 'billcode', 'order_id', 'amount']);
        Log::info($response);
    }

    
    //----------------------------------- Existing Vendor -----------------------------------//
    public function update_register($user_id, Request $request){

        $vendor = User::where('id', $user_id)->first();
        $user = $request->session()->get('user');

        return view('landingpage.register.exist_vendor', compact('vendor', 'user' ));

    }

}
