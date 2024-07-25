<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
      'description',
      
      'status'
     
      ];

      public function doctors(){
        return $this->hasMany(Doctor::class);
    }
}