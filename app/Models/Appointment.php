<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Appointment extends Model
{
    //use Translatable;
    use HasFactory;
    //public $translatedAttributes = ['name'];
    public $fillable= ['name','email','phone','notes','doctor_id','section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class,'section_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class ,'doctor_id');
    }
}
