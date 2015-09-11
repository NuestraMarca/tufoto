<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Entities\ProviderType;
 
class ProviderTypesComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $providerTypes = ProviderType::with('providers')->get();

        $view->with('providerTypes', $providerTypes);
    }
 
}