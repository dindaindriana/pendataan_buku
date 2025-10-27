<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user?->id)], //ini adalah untuk mengabaikan email yang sama saat update tapi user?->id itu mengambil id dari user yang sedang di update jika tidak ada maka akan bernilai null
            'password' => ['required', 'min:8'],
        ];
    }
}
