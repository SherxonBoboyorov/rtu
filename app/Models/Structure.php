<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Structure extends Model
{
    use HasFactory;

    protected $table = 'structures';

    protected $fillable = [
        'image'
    ];
}
