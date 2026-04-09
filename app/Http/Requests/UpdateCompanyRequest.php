<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'sometimes|string|min:3|max:255|unique:companies,name',
            'description' => 'sometimes|string|min:10|max:5000',
            'size' => 'sometimes|string|min:1',
            'logo_url' => 'nullable|url|max:255',
            'website_url' => 'nullable|url|max:255'
        ];
    }
}
