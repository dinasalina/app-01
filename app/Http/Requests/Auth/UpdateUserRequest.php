<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Tentukan sama ada pengguna diberi kuasa untuk membuat permintaan ini.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Dapatkan peraturan pengesahan yang digunakan untuk permintaan.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->route('user')->id,
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }

    /**
     * Custom mesej error untuk setiap rule.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama tidak boleh melebihi 255 aksara.',
            'email.required' => 'Emel wajib diisi.',
            'email.email' => 'Emel mesti dalam format yang betul.',
            'email.unique' => 'Emel telah digunakan. Sila guna emel lain.',
            'password.min' => 'Katalaluan mesti sekurang-kurangnya 8 aksara.',
            'password.confirmed' => 'Pengesahan katalaluan tidak sepadan.',
        ];
    }
}
