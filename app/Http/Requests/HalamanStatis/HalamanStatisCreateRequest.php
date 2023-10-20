<?php

namespace App\Http\Requests\HalamanStatis;

use Illuminate\Foundation\Http\FormRequest;

class HalamanStatisCreateRequest extends FormRequest
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
            'kategori' => 'required',
            //'judul' => 'required|min:10',
            'gambar_1' => 'image|mimes:jpg, jpeg, png, gif|max:10000',
            'gambar_2' => 'image|mimes:jpg, jpeg, png, gif|max:10000'
        ];
    }
}
