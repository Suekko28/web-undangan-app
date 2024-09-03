<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
            'judul' => ['required'],
            'deskripsi' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi'
        ];
    }
}
