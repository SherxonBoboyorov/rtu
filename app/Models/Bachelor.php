<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bachelor extends Model
{
    use HasFactory;

    protected $table = 'bachelors';

    protected $fillable = [
        'content_ru',
        'content_uz',
        'content_en',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_ru',
        'meta_description_ru'
    ];
}
