<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FutureJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_no',
            
           'job_date',
            'job_id',
            'description',
            'notification',
            'status',
            
     
      ];

      public function job()
      {
          return $this->belongsTo(Job::class, 'job_id');
      }
      
       public function invoice()
      {
          return $this->hasOne(Invoice::class);
      }
}
