<?php

namespace App\Http\Requests\Categories;

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
        $rules['title_singular'] .= ',title_singular,'.$this->route->getParameter('categories').',id';
        $rules['title_plural'] .= ',title_singular,'.$this->route->getParameter('categories').',id';
        $rules['seo_title'] .= ',seo_title,'.$this->route->getParameter('categories').',id';
        $rules['seo_description'] .= ',seo_description,'.$this->route->getParameter('categories').',id';
        $rules['cover'] = 'image';
        
        return $rules;
    }
}
