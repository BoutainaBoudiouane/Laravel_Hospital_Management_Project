<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Section extends Model
{
    use Translatable; 
    protected $fillable =['name','description'];
   
    public $translatedAttributes = ['name','description'];
    use HasFactory;

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
