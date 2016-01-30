<?php

namespace App\Http\Requests\Categories\Galleries;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditRequest extends Request
{
    /**
     * @var Route
     */
    private $route;
    private $createRequest;

    public function __construct(Route $route)
    {
        $this->route = $route;
        $this->createRequest = new CreateRequest();
    }

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
        $rules = $this->createRequest->rules();
        $rules['title'] .= ','.$this->route->getParameter('galleries').' = id';

        return $rules;
    }
}
