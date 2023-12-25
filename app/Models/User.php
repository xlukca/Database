<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'street',
        'street_number',
        'city',
        'postcode',
        'position_id',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute(){
        return $this->first_name .'&nbsp;'. $this->last_name;
    }

    public function setFirstNameAttribute($value){
        return $this->attributes['first_name'] = ucwords(strtolower($value));
    }
    
    public function setLastNameAttribute($value){
        return $this->attributes['last_name'] = ucwords(strtolower($value));
    }
    
    public function retentions() {
        return $this->hasMany(LoginRetention::class, 'user_id', 'id');
    }
    
    public function position() {
        return $this->hasOne(Position::class, 'id', 'position_id');
    }     

}
