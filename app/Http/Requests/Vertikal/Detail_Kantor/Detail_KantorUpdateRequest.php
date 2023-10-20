<?php

namespace App\Http\Requests\Vertikal\Detail_Kantor;

use Illuminate\Foundation\Http\FormRequest;

class Detail_KantorUpdateRequest extends FormRequest
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
            'nama_unit' => 'required|min:10',
            'alamat' => 'required|min:20',
            'telepon' => 'required|min:10',
            //'whatsapp' => 'numeric|min:10',
            'whatsapp' => 'min:10',
            'email' => 'email:rfc,dns',
            'situs_web' => 'required|url:http,https'
        ];
    }
}
