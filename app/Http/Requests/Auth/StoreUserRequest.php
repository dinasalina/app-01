<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Sila masukkan nama.',
            'email.required' => 'Sila masukkan emel.',
            'email.unique' => 'Emel ini sudah digunakan.',
            'password.required' => 'Sila masukkan kata laluan.',
            'password.confirmed' => 'Sahkan kata laluan tidak sepadan.',
        ];
    }
}
