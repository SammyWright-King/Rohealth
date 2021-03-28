<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'mobile', 'email', 'address', 'reg_no', 'status', ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany('App\Models\User', 'user_company');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function staffs(){
        return $this->hasMany('App\Models\Staff');
    }
}
