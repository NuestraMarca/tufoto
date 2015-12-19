<?php

namespace App\Http\ViewComposers\Dashboard\Categories;

use Illuminate\Contracts\View\View;
use App\Entities\Category;

class ListComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);

        $view->with([
            'categories' => $categories,
        ]);
    }
}
