<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'text' => 'required|min:2',
            'link' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'text.required' => 'Document text is required',
            'text.min'    => 'Document text must be more than 2 character',
            'link.required' => 'Please upload a file'
        ];
    }
}
