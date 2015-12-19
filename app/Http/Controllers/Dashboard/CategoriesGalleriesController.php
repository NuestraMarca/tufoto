<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\Galleries\CreateRequest;
use App\Http\Requests\Categories\Galleries\EditRequest;
use App\Entities\Category;
use App\Entities\Gallery;
use Storage, Flash;

class CategoriesGalleriesController extends Controller
{
    private $category;
    private $gallery;
    private $form_data;

    public static $prefixRoute = 'admin.categories.galleries.';
    public static $prefixView = 'dashboard.pages.categories.galleries.';

    public function __construct()
    {
        $this->beforeFilter('@newGallery', ['only' => ['create', 'store']]);
        $this->beforeFilter('@findCategory');
        $this->beforeFilter('@findGallery', ['only' => ['show', 'edit', 'update', 'destroy', 'destroyPhoto', 'addPhoto']]);
    }

    /**
     * Create a new Category.
     */
    public function newGallery()
    {
        $this->gallery = new Gallery();
    }

    /**
     * Find the Category or App Abort 404.
     */
    public function findCategory(Route $route)
    {
        $this->category = Category::findOrFail($route->getParameter('categories'));
    }

    /**
     * Find the Gallery or App Abort 404.
     */
    public function findGallery(Route $route)
    {
        $this->gallery = $this->category->galleries()->findOrFail($route->getParameter('galleries'));
    }

    /**
     * Return the default Form View for Companies.
     */
    public function getFormView($viewName = 'form')
    {
        return view(self::$prefixView.$viewName)->with([
                'form_data' => $this->form_data, 
                'category'  => $this->category, 
                'gallery'   => $this->gallery
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_id)
    {
        $this->form_data = ['route' => [CategoriesController::$prefixRoute.'update', $this->category->id], 'method' => 'PUT', 'files' => true];
        $galleries = $this->category->galleries()->orderBy('date', 'desc')->paginate(9);

        return view(self::$prefixView.'list', compact('galleries'))
            ->with(['category' => $this->category, 'form_data' => $this->form_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id)
    {
        $this->form_data = ['route' => [self::$prefixRoute.'store', $this->category->id], 'method' => 'POST'];

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
        $this->gallery->fill($request->all());
        $this->category->galleries()->save($this->gallery);
        $this->gallery->makeDirectory();
        $this->gallery->makeSmallDirectory();

        Flash::info('Galeria '.$this->gallery->name.' creada correctamente');

        return redirect()->route(self::$prefixRoute.'index', $this->category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id, $id)
    {
        return $this->getFormView('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id, $id)
    {
        $this->form_data = ['route' => [self::$prefixRoute.'update', $this->category->id, $this->gallery->id], 'method' => 'PUT'];
        
        return $this->getFormView();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $category_id, $id)
    {
        $this->gallery->fill($request->all());
        $this->gallery->save();
        Flash::info('Galeria '.$this->gallery->name.' actualizada correctamente');

        return redirect()->route(self::$prefixRoute.'index', $this->category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id, $id)
    {
        $data = [
            'success' => true,
            'message' => 'Categoria eliminada correctamente'
        ];   

        try {
            $this->gallery->delete(); 
        } catch (QueryException $e) {
            $data['success'] = false;
            $data['message'] = 'La Galería no se puede eliminar';
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPhoto(Request $request, $category_id, $id)
    {
        $data = [
            'success' => true,
            'message' => 'Foto eliminada correctamente'
        ];   

        $this->gallery->deletePhoto($request->get('photo'));

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addPhoto(Request $request, $category_id, $id)
    {        
        foreach ($request->file('file') as $key => $file) {
            $this->gallery->addPhoto($file);
        }

        $data = [
            'success'   => true,
            'message'   => 'Foto agregada correctamente'
        ];  

        return response()->json($data);
    }
}
