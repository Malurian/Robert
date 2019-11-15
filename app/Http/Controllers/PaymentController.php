<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Cartalyst\Stripe\Stripe;
// use Stripe\Stripe;
// use Stripe\Charge;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pay(Request $request)
    {
        $amount = 500;
        return view('dashboard.pay', compact('amount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Stripe::setApiKey('sk_test_7sZPXRirATqMnB7Aosk54FU900UsPQgBFW');
        // $charge = Charge::create([
        //     'amount' => 1000,
        //     'currency' => 'usd',
        //     'description' => 'Test Book',
        //     'source' => $request->token,
        // ]);

        // $stripe = new Stripe('sk_test_7sZPXRirATqMnB7Aosk54FU900UsPQgBFW');
        // $stripe = Stripe::make('sk_test_7sZPXRirATqMnB7Aosk54FU900UsPQgBFW');

        // $subscription = new Subscription;
        // $subscription->user_id = Auth::user()->id;
        // $subscription->price_id = $request->user_id;
        // $subscription->start = Carbon\Carbon::now();
        // $subscription->end = Carbon::now()->subDays(30);
        // $subscription->strip_id = $charge['id'];
        // $subscription->save();

        // return $subscription;

        // $charge = $stripe->charges()->create([
        //     'customer' => 'cus_4EBumIjyaKooft',
        //     'currency' => 'USD',
        //     'amount'   => 50.49,
        // ]);
        
        // dd($charge['id']);
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
