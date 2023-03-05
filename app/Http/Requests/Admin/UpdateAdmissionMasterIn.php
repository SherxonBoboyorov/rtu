<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdmissionMasterIn extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'admissionmastercategory_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp',
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'daytime_shalk_now' => 'required|max:255',
            'daytime_shalk_before' => 'required|max:255',
            'evening_shalk_now' => 'required|max:255',
            'evening_shalk_before' => 'required|max:255',
            'external_shalk_now' => 'required|max:255',
            'external_shalk_before' => 'required|max:255',
        ];
    }
}
