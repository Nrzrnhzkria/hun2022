<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HUNNews extends Model
{
    use HasFactory;
    protected $table = 'hun_news';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'teaser',
        'img_name', 
    ];
}
