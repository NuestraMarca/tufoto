<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

use App\Entities\Gallery;
use App\Entities\Message;

class WebSiteController extends Controller {

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
		$slides = glob('images/gallery_home' . '/*.*');
		return view('website.home', compact('slides'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function product()
	{
		return view('website.product', compact('images'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function we()
	{
		return view('website.we');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function pricing()
	{
		return view('website.pricing');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('website.contact');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postContact(ContactRequest $request)
	{		
		$message = Message::create($request->all());
		$message->sendEmail();

		return redirect()->route('website.index');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
		$search = $request->input('search');
		$galleries = Gallery::getSearch($search);
		return view('website.gallery.search', compact('galleries', 'search'));
	}
}
