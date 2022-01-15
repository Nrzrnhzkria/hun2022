<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HUNNewsLikes extends Model
{
    use HasFactory;
    protected $table = 'hun_news_likes';

    protected $fillable = [
        'user_id',
        'news_id', 
    ];
}
