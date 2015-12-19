<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProviderTypes\Providers\CreateRequest;
use App\Http\Requests\ProviderTypes\Providers\EditRequest;
use App\Entities\ProviderType;
use App\Entities\Provider;
use Storage, Flash;

class ProviderTypesProvidersController extends Controller
{
    private $providerType;
    private $provider;
    private $form_data;

    public static $prefixRoute = 'admin.providertypes.providers.';
    public static $prefixView = 'dashboard.pages.providertypes.providers.';

    public function __construct()
    {
        $this->beforeFilter('@newProvider', ['only' => ['create', 'store']]);
        $this->beforeFilter('@findProviderType');
        $this->beforeFilter('@findProvider', ['only' => ['show', 'edit', 'update', 'destroy', 'destroyPhoto', 'addPhoto', 'addCover']]);
    }

    /**
     * Create a new ProviderType.
     */
    public function newProvider()
    {
        $this->provider = new Provider();
    }

    /**
     * Find the ProviderType or App Abort 404.
     */
    public function findProviderType(Route $route)
    {
        $this->providerType = ProviderType::findOrFail($route->getParameter('providertypes'));
    }

    /**
     * Find the Provider or App Abort 404.
     */
    public function findProvider(Route $route)
    {
        $this->provider = $this->providerType->providers()->findOrFail($route->getParameter('providers'));
    }

    /**
     * Return the default Form View for Companies.
     */
    public function getFormView($viewName = 'form')
    {
        return view(self::$prefixView.$viewName)->with([
                'form_data' => $this->form_data, 
                'providerType'  => $this->providerType, 
                'provider'   => $this->provider
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($providertype_id)
    {
        $this->form_data = ['route' => [ProviderTypesController::$prefixRoute.'update', $this->providerType->id], 'method' => 'PUT', 'files' => true];
        $providers = $this->providerType->providers()->orderBy('created_at', 'desc')->paginate(9);

        return view(self::$prefixView.'list', compact('providers'))
            ->with(['providerType' => $this->providerType, 'form_data' => $this->form_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($providertype_id)
    {
        $this->form_data = ['route' => [self::$prefixRoute.'store', $this->providerType->id], 'method' => 'POST'];

        return $this->getFormView();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $this->provider->fill($request->all());
        $this->providerType->providers()->save($this->provider);
        $this->provider->makeDirectory();
        $this->provider->makeSmallDirectory();

        Flash::info('Proveedor '.$this->provider->name.' creado correctamente');

        return redirect()->route(self::$prefixRoute.'index', $this->providerType->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($providertype_id, $id)
    {
        return $this->getFormView('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($providertype_id, $id)
    {
        $this->form_data = ['route' => [self::$prefixRoute.'update', $this->providerType->id, $this->provider->id], 'method' => 'PUT'];
        
        return $this->getFormView();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $providertype_id, $id)
    {
        $this->provider->fill($request->all());
        $this->provider->save();
        Flash::info('Proveedor '.$this->provider->name.' actualizado correctamente');

        return redirect()->route(self::$prefixRoute.'index', $this->providerType->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($providertype_id, $id)
    {
        $data = [
            'success' => true,
            'message' => 'Proveedor eliminada correctamente'
        ];   

        try {
            $this->provider->delete(); 
        } catch (QueryException $e) {
            $data['success'] = false;
            $data['message'] = 'El Proveedor no se puede eliminar';
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPhoto(Request $request, $providertype_id, $id)
    {
        $data = [
            'success' => true,
            'message' => 'Foto eliminada correctamente'
        ];   

        $this->provider->deletePhoto($request->get('photo'));

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addPhoto(Request $request, $providertype_id, $id)
    {        
        foreach ($request->file('file') as $key => $file) {
            $this->provider->addPhoto($file);
        }

        $data = [
            'success'   => true,
            'message'   => 'Foto agregada correctamente'
        ];  

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addCover(Request $request, $providertype_id, $id)
    {        
        $this->provider->cover = $request->get('cover'); 
        $this->provider->save();

        return redirect()->route(self::$prefixRoute.'show', [$this->providerType->id, $this->provider->id]);
    }
}
