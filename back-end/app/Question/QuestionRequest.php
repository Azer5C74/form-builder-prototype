<?php

namespace App\Question;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            // validate each property
            '*.type' => 'required|string|in:long_text,short_text|max:255',
            '*.settings' => 'required|array',
            '*.settings.question' => 'required|string|max:255',
            '*.settings.size' => 'integer|between:1,50',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            '*.type.required' => 'The type field is required.',
            '*.type.in' => 'The type field must be one of the following values: long_text, short_text.',
            '*.settings.required' => 'The settings field is required.',
            '*.settings.array' => 'The settings field must be an array.',
            '*.settings.question.required' => 'The question field is required.',
            '*.settings.size.required' => 'The size field is required.',
            '*.settings.size.between' => 'The size field must be between :min and :max.',
        ];
    }
}
