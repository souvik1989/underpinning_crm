<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
     protected $fillable = [
       

           'name',
           'email',
           'phone',
         'message',
           'site_url',
           'business_name',
           'contact_date',
           
    ];
}
