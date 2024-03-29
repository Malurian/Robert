<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Package;
use Auth;

class EventController extends Controller
{
    public function aboutUs()
    {
        return view('about-us');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('packages')->get();
        return view('view-events', compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = '';
        if ($request->image) {
            $imageName = time() . Auth::user()->id . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['image'] = $imageName;
        $event = Event::create($input);

        for ($i=1; $i <= 9 ; $i++) { 
            if ($request->get('package-'.$i) && $request->get('amount-'.$i)) {
                $package = Package::create([
                    'event_id' => $event->id,
                    'name' => $request->get('package-'.$i),
                    'amount' => $request->get('amount-'.$i),
                    'quantity' => $request->get('quantity-'.$i),
                    'description' => $request->get('description-'.$i),
                ]);
            }
            
        }

        $message = 'Event Created Successfully';

        return view('success', compact('message'));
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
        $event = Event::where('id', $id)->first();
        return view('event.index', compact('event'));
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
        dd('edit');
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
        dd('update');
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
        dd('delete');
    }
}
