<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'title' => 'required|min:2',
            'subtitle' => 'required',
            'category_id' => 'required',
            'page_image' => 'file|image'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'subtitle.required' => 'Short description is required',
            'title.min'    => 'Title must be more than 2 character',
            'category_id.required' => 'Category is required',
            'page_image.file' => 'Must be a file',
            'page_image.image' => 'Must be an image'
        ];
    }
}
