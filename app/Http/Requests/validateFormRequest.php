<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormRequest extends FormRequest
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
            'email' => 'required|email'
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est requis',
            'nom.min' => 'Le champ nom doit contenir au moin 3 caractères',
            'email.required' => 'Le champ email est requis',
            'email.email' => 'Le mail n\'est pas correcte ',
        ];
    }
}
