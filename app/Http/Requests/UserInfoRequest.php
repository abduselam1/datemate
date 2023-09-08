<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'relationship' =>'sometimes',
            'star' =>'sometimes',
            'height' =>'sometimes|numeric',
            'drinking' =>'sometimes',
            'smoking' =>'sometimes',
            'religion' =>'sometimes|numeric',
            'personality' =>'sometimes',
        ];
    }
}
