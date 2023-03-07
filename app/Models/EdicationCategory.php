<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdicationCategory extends Model
{
    use HasFactory;

    protected $table = 'edication_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];
}
