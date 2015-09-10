<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
 
class ProductComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $images = glob('images/product' . '/*.*');
        $view->with('images', $images);
    }
 
}