<?php

namespace App\Http\Requests\Prosedur;

use Illuminate\Foundation\Http\FormRequest;

class ProsedurUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'uraian' => 'required',
            'formulir_1' => 'max:10000|mimes:pdf',
            'formulir_2' => 'max:10000|mimes:pdf',
            'formulir_3' => 'max:10000|mimes:pdf'
        ];
    }
}
