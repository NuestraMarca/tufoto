<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateRequest;
use App\Http\Requests\Categories\EditRequest;
use App\Entities\Category;
use Storage, Flash;
use Illuminate\Database\QueryException;

class CategoriesController extends Controller
{
    private $category;
    private $form_data;

    public static $prefixRoute = 'admin.categories.';
    public static $prefixView = 'dashboard.pages.categories.';

    public function __construct()
    {
        $this->beforeFilter('@newCategory', ['only' => ['create', 'store']]);
        $this->beforeFilter('@findCategory', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    /**
     * Create a new Category.
     */
    public function newCategory()
    {
        $this->category = new Category();
    }

    /**
     * Find the Category or App Abort 404.
     */
    public function findCategory(Route $route)
    {
        $this->category = Category::findOrFail($route->getParameter('categories'));
    }

    /**
     * Return the default Form View for Companies.
     */
    public function getFormView($viewName = 'form')
    {
        return view(self::$prefixView.$viewName)
            ->with(['form_data' => $this->form_data, 'category' => $this->category]);
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
        $this->category->fill($request->all());
        $this->category->save();
        Storage::makeDirectory($this->category->directory);
        $this->category->uploadImage($request->file('cover'));

        Flash::info('Categoría '.$this->category->name.' guardada correctamente');
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
        return redirect()->route(self::$prefixRoute . 'galleries.index', $this->category->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route(self::$prefixRoute . 'galleries.index', $this->category->id);
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
        $this->category->fill($request->all());
        $this->category->save();
        $this->category->uploadImage($request->file('cover'));

        Flash::info('Categoría '.$this->category->name.' actualizada correctamente');

        return redirect()->route(CategoriesGalleriesController::$prefixRoute.'index', $this->category->id);
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
            'message' => 'Categoría eliminada correctamente'
        ];   

        try {
            $this->category->delete(); 
        } catch (QueryException $e) {
            $data['success'] = false;
            $data['message'] = 'La Categoría no se puede eliminar, ya que contiene almenos una Galería';
        }

        return response()->json($data);
    }
}
