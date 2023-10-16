<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['required','file','image'],
            'sex' => ['required'],
            'date_of_birth' => ['required'],
            'interested_sex' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'languages' => ['required'],
            'religion' => ['required'],
            'education' => ['required'],
            'education' => ['required'],
            'purpose' => ['required'],
            'bio' => ['required'],
        ];
    }
}
