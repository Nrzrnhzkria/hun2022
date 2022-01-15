<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class SeminarQR extends Model
{
    use HasFactory;
    protected $table = 'seminar_qr';

    protected $fillable = [
        'location_name',
        'qr_value',
        'seminar_date',
        'time_start',
        'time_end', 
    ];

    public static function insertDB(Request $request){
        try{
            SeminarQR::create([
                'location_name' => $request['location_name'],
                'qr_value' => $request['qr_value'],
                'seminar_date' => $request['seminar_date'],
                'time_start' => $request['time_start'], 
                'time_end' => $request['time_end'], 
            ]);

            $data = ['status' => true, 'message' => "Inserted."]; 
            return $data;
            
        } catch(QueryException $ex){ 
            $data = ['status' => false, 'message' => $ex]; 
            return $data;
        } 
    }
}
