<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function create_bill(){
        $bill_id = 'ID'.uniqid();

        $data = array(
            'userSecretKey' => config('toyyibpay.key'),
            'categoryCode' => config('toyyibpay.category'),
            'billName' => 'HUN Registration',
            'billDescription'=>'Hari Usahawan Negara 2022',
            'billPriceSetting'=>0,
            'billPayorInfo'=>1,
            'billAmount'=>100,
            'billReturnUrl'=>'https://hariusahawannegara.com.my/toyyibpay-status',
            'billCallbackUrl'=>'https://hariusahawannegara.com.my/toyyibpay-callback',
            'billExternalReferenceNo' => $bill_id,
            'billTo'=>'Nama Pembeli',
            'billEmail'=>'zarina4.11@gmail.com',
            'billPhone'=>'0194342411',
            'billSplitPayment'=>0,
            'billSplitPaymentArgs'=>'',
            'billPaymentChannel'=>2,
            'billContentEmail'=>'Thank you for registering to HUN!',
            'billChargeToCustomer'=>2
        );

        $url = 'https://toyyibpay.com/index.php/api/createBill';
        $response = Http::asForm()->post($url, $data);
        $bill_code = $response[0]['BillCode'];

        return redirect('https://toyyibpay.com/' . $bill_code);
    }

    public function payment_status(){
        $response = request()->all(['status_id', 'billcode', 'order_id']);
        return $response;
    }

    public function callback(){
        $response = request()->all(['refno', 'status', 'reason', 'billcode', 'order_id', 'amount']);
        Log::info($response);
    }
}
