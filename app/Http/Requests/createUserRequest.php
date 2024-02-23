<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'nom' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5'
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est requis',
            'nom.min' => 'Le nom doit comporter au moin 3 caractères',
            'email.required' => 'Le champ email est requis',
            'email.unique' => 'Cette adresse Email est déjà lié à un compte',
            'password.required' => 'Le champ mot de passe est requis',
            'password.min' => 'Le mot de passe doit comporter au moin 5 caractères',
        ];
    }
}
