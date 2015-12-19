<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProviderTypes\CreateRequest;
use App\Http\Requests\ProviderTypes\EditRequest;
use App\Entities\ProviderType;
use Storage, Flash;
use Illuminate\Database\QueryException;

class ProviderTypesController extends Controller
{
    private $providerType;
    private $form_data;

    public static $prefixRoute = 'admin.providertypes.';
    public static $prefixView = 'dashboard.pages.providertypes.';

    public function __construct()
    {
        $this->beforeFilter('@newProviderType', ['only' => ['create', 'store']]);
        $this->beforeFilter('@findProviderType', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    /**
     * Create a new ProviderType.
     */
    public function newProviderType()
    {
        $this->providerType = new ProviderType();
    }

    /**
     * Find the ProviderType or App Abort 404.
     */
    public function findProviderType(Route $route)
    {
        $this->providerType = ProviderType::findOrFail($route->getParameter('providertypes'));
    }

    /**
     * Return the default Form View for Companies.
     */
    public function getFormView($viewName = 'form')
    {
        return view(self::$prefixView.$viewName)
            ->with(['form_data' => $this->form_data, 'providerType' => $this->providerType]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view()->make(self::$prefixView.'list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->form_data = ['route' => self::$prefixRoute.'store', 'method' => 'POST', 'files' => true];

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
        $this->providerType->fill($request->all());
        $this->providerType->save();

        Flash::info('Tipo de Proveedor '.$this->providerType->name.' guardado correctamente');
        return redirect()->route(self::$prefixRoute.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route(self::$prefixRoute . 'providers.index', $this->providerType->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route(self::$prefixRoute . 'providers.index', $this->providerType->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $this->providerType->fill($request->all());
        $this->providerType->save();

        Flash::info('Tipo de Proveedor '.$this->providerType->name.' actualizado correctamente');

        return redirect()->route(ProviderTypesProvidersController::$prefixRoute.'index', $this->providerType->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = [
            'success' => true,
            'message' => 'Tipo de Proveedor eliminado correctamente'
        ];   

        try {
            $this->providerType->delete(); 
        } catch (QueryException $e) {
            $data['success'] = false;
            $data['message'] = 'El Tipo de Proveedor no se puede eliminar, ya que contiene almenos un Proveedor';
        }

        return response()->json($data);
    }
}
