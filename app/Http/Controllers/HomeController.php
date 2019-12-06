<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventUser;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $my_created_events = Event::where('user_id', Auth::user()->id)->get();
        $my_subscribed_events = EventUser::where('user_id', Auth::user()->id)->with('event')->get();
        return view('home', compact('my_created_events', 'my_subscribed_events'));
    }
}
