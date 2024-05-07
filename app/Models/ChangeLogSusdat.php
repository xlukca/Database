<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeLogSusdat extends Model
{
    use HasFactory;

    protected $fillable = [
        'susdat_id', 
        'item', 
        'old_value', 
        'new_value', 
        'user_id',
        'created_at',
    ];

    public function userChangeLog() {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function susdatChangeLog() {
        return $this->hasOne(Susdat::class, 'id','susdat_id');
    }
}
