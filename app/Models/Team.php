<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'department_id',
        'image',
        'name_ru',
        'name_uz',
        'name_en',
        'slug_ru',
        'slug_uz',
        'slug_en',
        'job_title_ru',
        'job_title_uz',
        'job_title_en',
        'reception_days_ru',
        'reception_days_uz',
        'reception_days_en',
        'specialties_ru',
        'specialties_uz',
        'specialties_en',
        'description_ru',
        'description_uz',
        'description_en',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_ru',
        'meta_description_ru'
    ];

    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/team/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/team/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $team): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $team->image)) {
                File::delete(public_path() . $team->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/team/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/team/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $team->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/team/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/team/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
