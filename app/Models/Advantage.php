<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Advantage extends Model
{
    use HasFactory;

    protected $table = 'advantages';
    protected $fillable = [
        'image',
        'title_ru', 'title_uz', 'title_en',
        'result',
        'description_ru', 'description_uz', 'description_en'
    ];
}
