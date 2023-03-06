<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class EveningEdicationIn extends Model
{
    use HasFactory;

    protected $table = 'evening_edication_ins';

    protected $fillable = [
        'eveningedicationcategory_id',
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'daytime_shalk_now',
        'daytime_shalk_before',
        'evening_shalk_now',
        'evening_shalk_before',
        'external_shalk_now',
        'external_shalk_before'
    ];

    public function eveningedicationcategory()
    {
        return $this->hasOne(EveningEdicationCategory::class, 'id', 'eveningedicationcategory_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/eveningedicationin/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/eveningedicationin/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $eveningedicationin): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $eveningedicationin->image)) {
                File::delete(public_path() . $eveningedicationin->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/eveningedicationin/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/eveningedicationin/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $eveningedicationin->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/eveningedicationin/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/eveningedicationin/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
