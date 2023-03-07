<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionCategory extends Model
{
    use HasFactory;

    protected $table = 'admission_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function admissionins(){
        return $this->hasMany(AdmissionIn::class, 'admissioncategory_id');
    }

}
