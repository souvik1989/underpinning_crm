<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class AdminUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //protected $guard = 'admin';
    
    protected $fillable = ['first_name','last_name','email','password','mobile','status','mobile','image','abn','account_name','account_no','bsb'];
    
    protected $hidden = ['password','remember_token'];
      public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
