<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'business_name',
      'business_type',
       'address',
      'phone',
      'email',
        'status',
        'website'
        ];
        
         protected static function boot()
      {
          parent::boot();
    
          static::creating(function ($supplier) {
              $supplier->s_no = static::generateUniqueSupplierNumber();
          });
      }
    
      protected static function generateUniqueSupplierNumber()
      {
          $timestamp = now()->format('YmdHis'); // Current date and time
          $random = mt_rand(10000, 99999); // Random 4-digit number
    
          return $random;
      }
}
