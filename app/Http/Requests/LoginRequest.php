<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Tolong masukkan email dengan benar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8.',
        ];
    }
}
