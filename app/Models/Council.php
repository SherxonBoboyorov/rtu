<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Council extends Model
{
    use HasFactory;

    protected $table = 'councils';

    protected $fillable = [
        'image',
        'name_ru',
        'name_uz',
        'name_en',
        'job_title_ru',
        'job_title_uz',
        'job_title_en',
        'phone_number',
        'reception_days_ru',
        'reception_days_uz',
        'reception_days_en',
        'email',
        'description_ru',
        'description_uz',
        'description_en',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/council/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/council/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $council): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $council->image)) {
                File::delete(public_path() . $council->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/council/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/council/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $council->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/council/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/council/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
