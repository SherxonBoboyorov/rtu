<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AdmissionMasterCategory extends Model
{
    use HasFactory;

    protected $table = 'admission_master_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function admissionmasterins(){
        return $this->hasMany(AdmissionMasterIn::class, 'admissionmastercategory_id');
    }
}
