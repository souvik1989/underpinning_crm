<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hospital',
       'gender',
       'marrital_status',
        'reg_no',
        'qualification',
        'email',
        'phone1',
        'phone2',
        'phone3',
       'dob',
       'anniversary',
       'city_id',
        'state_id',
        'doctor_category_id',
        'division_id',
        'location_id',
        'speciality_id',
        'status',
     
      ];

      public function division()
{
    return $this->belongsTo(Division::class);
}
public function Location()
{
    return $this->belongsTo(Location::class);
}
public function speciality()
{
    return $this->belongsTo(Speciality::class);
}
public function doctor_category()
{
    return $this->belongsTo(DoctorCategory::class);
}
}
