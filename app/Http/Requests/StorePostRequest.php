<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        return ['title' => 'required|string|min:3',
            'body' => 'required|string|min:10',
            //
        ];
    }

    public function messages(): array
{
    return [
        'title.required' => 'Title is empty',
        'title.unique' => 'Unique title',
        'body.required' => 'Body is empty',
    ];
}
}
