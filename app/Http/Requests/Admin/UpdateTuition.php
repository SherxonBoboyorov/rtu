<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTuition extends FormRequest
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
            'content_ru' => 'required',
            'content_uz' => 'required',
            'content_en' => 'required',
            'content_table_ru' => 'required',
            'content_table_uz' => 'required',
            'content_table_en' => 'required',
        ];
    }
}
