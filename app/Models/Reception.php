<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;

    protected $table = 'receptions';

    protected $fillable = [
        'fullname',
        'date_of_birth',
        'passport_data',
        'address',
        'index',
        'email',
        'phone_number',
        'question_text',
    ];
}
