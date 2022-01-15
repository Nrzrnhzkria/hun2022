<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SeminarAttendance extends Model
{
    use HasFactory;
    protected $table = 'seminar_attendance';

    protected $fillable = [
        'user_id',
        'seminar_id', 
    ];
}
