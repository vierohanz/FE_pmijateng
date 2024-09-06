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
            'captcha' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'captcha.captcha' => 'The CAPTCHA verification failed',
        ];
    }
}
