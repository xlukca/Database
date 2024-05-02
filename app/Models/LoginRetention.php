<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use MongoDB\Laravel\Eloquent\Model;

class LoginRetention extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'login_ip', 
        'login_time', 
        'user_agent',
    ];
}
