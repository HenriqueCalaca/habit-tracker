<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:60|confirmed',
        ];
    }

    public function messages(): array {
        return [
          'name.required' => 'O campo nome é obrigatório',
          'name.max' => 'O campo nome deve ter no máximo 255 caracteres',

          'email.required' => 'O campo e-mail é obrigatório',
          'email.unique' => 'O e-mail informado não está disponível',

          'password.required' => 'O campo senha é obrigatorio',
          'password.min' => 'A senha de ter no minimo 6 caracteres',
          'password.max' => 'A senha de ter no minimo 60 caracteres',
          'password.confirmed' => 'As senhas não conferem',
        ];
    }
}
