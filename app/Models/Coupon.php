<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupon';

    protected $fillable = [
        'vendor_id',
        'coupon_no',
        'amount',
        'quantity',
    ];

    public static function insertDB(Request $request){

        try{
            Coupon::create([
                'vendor_id' => $request['vendor_id'],
                'coupon_no' => $request['coupon_no'],
                'amount' => $request['amount'],
                'quantity' => $request['quantity'], 
            ]);

            $data = ['status' => true, 'message' => "Inserted."]; 
            return $data;

        } catch(QueryException $ex){ 
            $data = ['status' => false, 'message' => $ex]; 
            return $data;
        }  
    }
}
