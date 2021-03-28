<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Staff extends  Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $fillable = [
        'last_login', 'prev_login', 'company', 'first_name', 'last_name', 'pin',
        'gender', 'marital_status', 'email', 'mobile', 'address', 'city',
        'state', 'country', 'budget', 'status', 'token'
    ];

    protected $hidden = [
        'pin',
        'token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function getByCode($code){
        $data = $this->where('token', $code)->first();
        return $data;

    }

    public function getByEmail($email){
        $data = Self::where('email', $email)->first();
        return $data;
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
