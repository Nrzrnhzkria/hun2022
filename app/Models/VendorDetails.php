<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'details_id', 'user_id', 'phone_no', 'membership_id', 'ssm_no'
    ];
}
