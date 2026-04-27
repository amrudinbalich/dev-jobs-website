<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => ['sometimes', 'string', 'min:3', 'max:255', Rule::unique('companies', 'name')->ignore($this->company)],
            'description' => 'sometimes|string|min:10|max:5000',
            'size' => ['sometimes', Rule::in(['1-10', '11-50', '51-200', '201-500', '501-1000', '1001-5000'])],
            'logo_url' => 'nullable|url|max:255',
            'website_url' => 'nullable|url|max:255'
        ];
    }
}
