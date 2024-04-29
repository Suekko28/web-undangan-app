<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alt3FormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'nama' => ['required', 'max:100'],
            'ucapan' => ['required'],
            'alamat' => ['required']
            //
        ];
    }
    public function messages(): array 
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'ucapan.required' => 'Ucapan wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi'

        ];

    }
}
