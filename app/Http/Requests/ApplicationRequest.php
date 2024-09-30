<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Это поле обязательно для заполнения.',
            'email.required' => 'Это поле обязательно для заполнения.',
            'email.email' => 'Это поле обязательно для заполнения.',
        ];
    }
}
