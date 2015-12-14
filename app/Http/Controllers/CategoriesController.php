<?php namespace App\Http\Controllers;
use App\Entities\Category;

class CategoriesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();
		return view('website.gallery.categories', compact('categories'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function show($url)
	{
		$category = Category::findOrFailByUrl($url);
		return view('website.gallery.category', compact('category'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function gallery($category_url, $gallery_url)
	{
		$category = Category::findOrFailByUrl($category_url);
		$gallery = $category->findOrFailGalleryByUrl($gallery_url);

		return view('website.gallery.gallery', compact('gallery'));
	}


}