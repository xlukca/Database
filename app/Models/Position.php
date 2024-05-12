<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // SQL databases
use Illuminate\Database\Eloquent\SoftDeletes;
// use MongoDB\Laravel\Eloquent\Model; // MongoDB

class Position extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];  
}
