<?php

namespace App\Http\Requests\Categories\Galleries;

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
            'title'         => 'required|max:250|unique:galleries',
            'date'          => 'required|date',
            'description'   => 'required|max:250'
        ];
    }
}
