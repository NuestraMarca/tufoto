<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Provider;
use App\Entities\ProviderType;


class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('website.provider.list');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($url)
    {
        $provider = Provider::findOrFailByUrl($url);
        return view('website.provider.show', compact('provider'));
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function type($url)
    {
        $type = ProviderType::findOrFailByUrl($url);
        return view('website.provider.type', compact('type'));
    }

}
