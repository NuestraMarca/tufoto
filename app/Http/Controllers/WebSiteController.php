<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\Landing\CommentRequest;  
use Illuminate\Database\QueryException;

use App\Entities\Gallery;
use App\Entities\Provider;
use App\Entities\Message;
use App\Entities\Post;
use App\Entities\Client;
use App\Entities\Comment;

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
		$slides = collect(glob('images/gallery-home' . '/*.*'))->random(10);

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
		
		return view('website.thanks');
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
		$providers = Provider::getSearch($search);

		return view('website.gallery.search', compact('galleries', 'providers',  'search'));
	}

	public function landingBodas()
	{
		$comments = Comment::roots()
			->with(['children.client', 'client'])
			->whereCommentableId(1)
			->get();

		return view('website.landing.bodas',compact('comments'));
	}

	public function postComment(CommentRequest $request)
	{
		try {
			$client = Client::firstOrNew(['email' => $request->input('comment-email')]);

			if(! $client->exists) {
				$client->name = $request->input('comment-name');
				$client->save();
			}
		} catch (QueryException $e) {
			return ['success' => false];	
		}

		if($comment = $client->newComment($request->input('post'), $request->input('comment-body'))) {
			return ['success' => true, 'comment' => $comment, 'client' => $client];	
		}

		return ['success' => false];
		
	}
}
