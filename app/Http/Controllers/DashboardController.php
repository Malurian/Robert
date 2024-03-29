<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventUser;
use Auth;

class DashboardController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_created_events = Event::where('user_id', Auth::user()->id)->get();
        $my_subscribed_events = EventUser::where('user_id', Auth::user()->id)->with('event')->get();
        return view('dashboard/dash', compact('my_created_events', 'my_subscribed_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('create');
        return view('dashboard/create-events');
    }

    public function sponsorship()
    {
        // dd('create');
        return view('dashboard/purchase-sponsorship');
    }

    public function artworks()
    {
        // dd('create');
        return view('dashboard/send-artworks');
    }

    public function extras()
    {
        // dd('create');
        return view('dashboard/extras');
    }

    public function social()
    {
        // dd('create');
        $my_created_events = Event::where('user_id', Auth::user()->id)->get();
        $my_subscribed_events = EventUser::where('user_id', Auth::user()->id)->with('event')->get();
        return view('dashboard/boost-social', compact('my_created_events', 'my_subscribed_events'));
    }

    public function form()
    {
        // dd('create');
        $my_created_events = Event::where('user_id', Auth::user()->id)->get();
        $my_subscribed_events = EventUser::where('user_id', Auth::user()->id)->with('event')->get();
        return view('dashboard/boost-form', compact('my_created_events', 'my_subscribed_events'));
    }

    public function featured()
    {
        // dd('create');
        $my_created_events = Event::where('user_id', Auth::user()->id)->get();
        $my_subscribed_events = EventUser::where('user_id', Auth::user()->id)->with('event')->get();
        return view('dashboard/boost-featured', compact('my_created_events'));
    }

    public function wallet()
    {
        // dd('create');
        return view('dashboard/wallet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
