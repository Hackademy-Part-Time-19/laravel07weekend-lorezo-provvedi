<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreArticleQuest extends FormRequest
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
            'title' => 'required|max:50',
            'category' => 'required|max:20',
            'description' => 'required|max:150',
            'body' => 'required|max:5000',
            'image' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo deve essere al massimo di 50 caratteri',
            'category.required' => 'la categoria è obbligatoria',
            'category.max' => 'la categoria deve essere al massimo 20 caratteri',
            'description.required' => 'la descrizione è obbligatoria',
            'description.max.' => 'la descrizione deve essere al massimo 150 caratteri',
            'body.required' => 'il body è obbligatorio',
            'body.max' => 'il body deve essere al massimo 5000 caratteri',
            'image.max' => 'non più di 200 caratteri',
        ];
    }
}
