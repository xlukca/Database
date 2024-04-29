<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model; // connect to SQL databases
use Illuminate\Database\Eloquent\SoftDeletes;
use MongoDB\Laravel\Eloquent\Model; // connect to MongoDB

class Position extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];  
}
