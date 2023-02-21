<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
        'description_ru',
        'description_uz',
        'description_en',
    ];
}
