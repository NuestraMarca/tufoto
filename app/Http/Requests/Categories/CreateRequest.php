<?php

namespace App\Http\Requests\Categories;

use App\Http\Requests\Request;

class CreateRequest extends Request
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
            'title_plural'      => 'required|max:250|unique:categories',
            'title_singular'    => 'required|max:250|unique:categories',
            'seo_title'         => 'max:70|unique:categories',
            'seo_description'   => 'max:160|unique:categories',
            'cover'             => 'required|image'
        ];
    }
}
