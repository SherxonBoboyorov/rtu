<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCategory extends Model
{
    use HasFactory;

    protected $table = 'master_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function masterins() {
        return $this->hasMany(MasterIn::class, 'mastercategory_id');
    }
}
