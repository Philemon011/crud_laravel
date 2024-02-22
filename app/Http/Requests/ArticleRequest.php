<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'titre'=> 'required|min:3',
            'description'=> 'required|min:5',
        ];
    }

    public function messages(): array
    {
        return [
            'titre.required' => 'Le champ titre est requis',
            'titre.min' => 'Le titre doit comporter au moin 3 caractères',
            'description.required' => 'Le champ description est requis',
            'description.min' => 'La description doit comporter au moin 5 caractères',
        ];
    }
}
