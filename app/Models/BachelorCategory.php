<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BachelorCategory extends Model
{
    use HasFactory;

    protected $table = 'bachelor_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function bachelorins() {
        return $this->hasMany(BachelorIn::class);
    }
}
