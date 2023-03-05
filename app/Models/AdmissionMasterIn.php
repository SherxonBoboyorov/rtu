<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class AdmissionMasterIn extends Model
{
    use HasFactory;

    protected $table = 'admission_master_ins';

    protected $fillable = [
        'admissionmastercategory_id',
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

    public function admissionmastercategory()
    {
        return $this->hasOne(AdmissionMasterCategory::class, 'id', 'admissionmastercategory_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/admissionmasterin/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/admissionmasterin/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $admissionmasterin): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $admissionmasterin->image)) {
                File::delete(public_path() . $admissionmasterin->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/admissionmasterin/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/admissionmasterin/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $admissionmasterin->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/admissionmasterin/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/admissionmasterin/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
