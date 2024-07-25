<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no',
      'mail_send',
      'invoice_status',
      'status'
     
      ];

      public function job()
      {
          return $this->belongsTo(Job::class);
      }
      
       public function future_job()
      {
          return $this->belongsTo(FutureJob::class);
      }
      public function quote()
      {
          return $this->belongsTo(Quote::class);
      }

      protected static function boot()
      {
          parent::boot();
    
          static::creating(function ($invoice) {
              $invoice->invoice_no = static::generateUniqueInvoiceNumber();
          });
      }
    
      protected static function generateUniqueInvoiceNumber()
      {
          $timestamp = now()->format('YmdHis'); // Current date and time
          $random = mt_rand(10000, 99999); // Random 4-digit number
    
          return $random.'/I';
      }
}
