<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRevisorRequest extends FormRequest
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
            'body' => 'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'body.required' => 'Non hai inserito nessun messaggio',
            'body.max' => 'Non puoi scrivere più di :max caratteri'
        ];
    }
}
