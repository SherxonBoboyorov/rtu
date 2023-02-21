<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisoryboard extends Model
{
    use HasFactory;

    protected $table = 'advisoryboards';

    protected $fillable = [
        'description_ru',
        'description_uz',
        'description_en',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_ru',
        'meta_description_ru'
    ];
}
