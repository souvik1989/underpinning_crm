<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
       'quote_no',
       'area',
       'customer_name',
       'quote_date',
       'price',
       'email',
       'phone',
       'quantity',
       'address',
        'site_address',
       'description',
       'comment',
        'status',
      
       ];

       public function user()
       {
           return $this->belongsTo(User::class);
       }
       public function invoice()
      {
          return $this->hasOne(Invoice::class);
      }

      protected static function boot()
      {
          parent::boot();
    
          static::creating(function ($quote) {
              $quote->quote_no = static::generateUniqueQuoteNumber();
          });
      }
    
      protected static function generateUniqueQuoteNumber()
      {
          $timestamp = now()->format('YmdHis'); // Current date and time
          $random = mt_rand(10000, 99999); // Random 4-digit number
    
          return $random.'/Q';
      }
}
