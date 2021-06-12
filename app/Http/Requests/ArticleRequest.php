<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|unique:articles|min:2',
            'slug' => 'unique:articles',
            'subtitle' => 'required',
            'category_id' => 'required',
            'page_image' => 'file|image'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'slug.unique' => 'Slug must be unique',
            'subtitle.required' => 'Short description is required',
            'title.min'    => 'Title must be more than 2 character',
            'title.unique'    => 'Title must be unique',
            'category_id.required' => 'Category is required',
            'page_image.file' => 'Must be a file',
            'page_image.image' => 'Must be an image'
        ];
    }
}
