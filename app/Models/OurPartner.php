<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class OurPartner extends Model
{
    use HasFactory;

    protected $table = 'our_partners';

    protected $fillable = [
        'image'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/ourpartner/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/ourpartner/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $ourpartner): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $ourpartner->image)) {
                File::delete(public_path() . $ourpartner->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/ourpartner/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/ourpartner/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $ourpartner->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/ourpartner/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/ourpartner/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
