<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateRequest;
use App\Http\Requests\Categories\EditRequest;
use App\Entities\Message;
use Storage, Flash;
use Illuminate\Database\QueryException;

class MessagesController extends Controller
{
    private $message;
    private $form_data;

    public static $prefixRoute = 'admin.messages.';
    public static $prefixView = 'dashboard.pages.';

    public function __construct()
    {
        $this->beforeFilter('@findMessage', ['only' => ['change']]);
    }

    /**
     * Find the Message or App Abort 404.
     */
    public function findMessage(Route $route)
    {
        \Log::info($route->getParameter('messages'));
        $this->message = Message::findOrFail($route->getParameter('messages'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view()->make(self::$prefixView.'messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        $this->message->state = $request->input('state');
        $this->message->save();

        return ['success' => true];
    }
}
