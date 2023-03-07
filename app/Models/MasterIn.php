<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class MasterIn extends Model
{
    use HasFactory;

    protected $table = 'master_ins';

    protected $fillable = [
        'mastercategory_id',
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'content_ru',
        'content_uz',
        'content_en',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_ru',
        'meta_description_ru'
    ];

    public function mastercategory()
    {
        return $this->belongsTo('App\Models\MasterCategory', 'mastercategory_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/masterin/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/masterin/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $masterin): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $masterin->image)) {
                File::delete(public_path() . $masterin->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/masterin/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/masterin/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $masterin->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/masterin/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/masterin/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
