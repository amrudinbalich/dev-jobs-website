<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreJobPostRequest extends FormRequest
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
            'title' => "required|string|min:3|max:255|unique:job_posts,title,NULL,id,company_id,{$this->company_id}",
            'description' => 'required|string|min:10|max:5000',
            'company_id'  => 'required|integer|exists:companies,id',
            'category_id' => 'required|integer|exists:categories,id'
        ];
    }

    public function messages(): array
    {
        return [
            'title.unique' => 'This job title already exists for this company.',
        ];
    }
}
