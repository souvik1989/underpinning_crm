<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_no',
            'area',
            'customer_name',
           'job_date',
            'price',
            'quantity',
            'hours',
            'gst', 
            'address',
             'site_address',
            'description',
            'comment',
            'status',
            'future',
            'email',
            'phone'
     
      ];
      public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function invoice()
      {
          return $this->hasOne(Invoice::class);
      }

      public function children()
      {
          return $this->hasMany(Job::class, 'parent_id');
      }

      public function future_jobs()
      {
          return $this->hasMany(FutureJob::class);
      }
  
      public function parent()
  {
      return $this->belongsTo(Job::class, 'parent_id');
  }
  protected static function boot()
  {
      parent::boot();

      static::creating(function ($job) {
          $job->job_no = static::generateUniqueJobNumber();
      });
  }

  protected static function generateUniqueJobNumber()
  {
      $timestamp = now()->format('YmdHis'); // Current date and time
      $random = mt_rand(1000, 9999); // Random 4-digit number

      return $random.'/J';
  }
}
