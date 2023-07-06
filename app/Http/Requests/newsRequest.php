<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newsRequest extends FormRequest
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
    public function rules()
    {
        return [

            'photo' => 'required',
            'title' => 'required',
            'details' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => 'الصورة مطلوية',
            'title.required' => 'العنوان مطلوب',
            'details.required' => 'التفاصيل مطلوية',

        ];
    }
}
