<?php

namespace App\Http\Requests\ProviderTypes\Providers;

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
            'name'         => 'required|max:250|unique:providers',
            'tel'          => 'max:250',
            'address'      => 'max:250',
            'links'        => 'max:250',

        ];
    }
}
