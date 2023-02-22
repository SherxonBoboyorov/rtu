<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeam extends FormRequest
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
            'department_id' => 'required',
            'name_ru' => 'required|max:255',
            'name_uz' => 'required|max:255',
            'name_en' => 'required|max:255',
            'job_title_ru' => 'required|max:255',
            'job_title_uz' => 'required|max:255',
            'job_title_en' => 'required|max:255',
            'reception_days_ru' => 'required|max:255',
            'reception_days_uz' => 'required|max:255',
            'reception_days_en' => 'required|max:255',
            'specialties_ru' => 'required|max:255',
            'specialties_uz' => 'required|max:255',
            'specialties_en' => 'required|max:255',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'description_en' => 'required',
        ];
    }
}
