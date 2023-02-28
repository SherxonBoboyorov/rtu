<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $table = 'statistics';
    protected $fillable = [
        'result',
        'description_ru', 'description_uz', 'description_en'
    ];
}
