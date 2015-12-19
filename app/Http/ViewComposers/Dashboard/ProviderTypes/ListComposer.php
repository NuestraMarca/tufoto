<?php

namespace App\Http\ViewComposers\Dashboard\ProviderTypes;

use Illuminate\Contracts\View\View;
use App\Entities\ProviderType;

class ListComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $providerTypes = ProviderType::orderBy('created_at', 'desc')->paginate(10);

        $view->with([
            'providerTypes' => $providerTypes,
        ]);
    }
}
