<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'img_path' => 'required|file|image'
        ];
    }
    public function messages()
    {
        return [
            'img_path.required' => 'Image is required',
            'img_path.file' => 'Please upload a file',
            'img_path.required' => 'Please upload an image',
        ];
    }
}
