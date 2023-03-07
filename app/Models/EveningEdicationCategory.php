<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EveningEdicationCategory extends Model
{
    use HasFactory;

    protected $table = 'evening_edication_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function eveningedicationins(){
        return $this->hasMany(EveningEdicationIn::class, 'eveningedicationcategory_id');
    }
}
