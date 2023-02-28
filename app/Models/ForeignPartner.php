<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ForeignPartner extends Model
{
    use HasFactory;

    protected $table = 'foreign_partners';

    protected $fillable = [
        'image',
        'link'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/foreignpartner/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/foreignpartner/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $foreignpartner): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $foreignpartner->image)) {
                File::delete(public_path() . $foreignpartner->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/foreignpartner/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/foreignpartner/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $foreignpartner->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/foreignpartner/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/foreignpartner/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
