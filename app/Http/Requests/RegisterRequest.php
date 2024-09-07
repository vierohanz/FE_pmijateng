<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'regex:/^[0-9]+$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['same:password'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password_confirmation.required' => 'Password confirmation tidak boleh kosong',
            'name.required' => 'Nama tidak boleh kosong',
            'password_confirmation.same' => 'Password confirmation tidak sama dengan password',
        ];
    }
}
