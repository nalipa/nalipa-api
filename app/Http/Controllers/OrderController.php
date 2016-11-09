<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function userOrders($user_id)
    {
        return Order::all()->where('user_id','=',$user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();

        $order->user_id = $request->user_id;
        $order->order_number = $request->order_number;
        $order->status = $request->status;
        $order->tzs_amount = $request->tzs_amount;
        $order->exchange_rate = $request->exchange_rate;
        $order->usd_amount = $request->usd_amount;
        $order->transaction_fee = $request->transaction_fee;
        $order->order_amount = $request->order_amount;
        $order->stripe_amount = $request->stripe_amount;
        $order->stripe_customer = $request->stripe_customer;
        $order->stripe_charge = $request->stripe_charge;
        $order->transaction_date = $request->transaction_date;

        if ( $order->save() )
        {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
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
        $order = Order::find($id);

        if ( $order )
        {
            $order->user_id = $request->user_id;
            $order->order_number = $request->order_number;
            $order->status = $request->status;
            $order->tzs_amount = $request->tzs_amount;
            $order->exchange_rate = $request->exchange_rate;
            $order->usd_amount = $request->usd_amount;
            $order->transaction_fee = $request->transaction_fee;
            $order->order_amount = $request->order_amount;
            $order->stripe_amount = $request->stripe_amount;
            $order->stripe_customer = $request->stripe_customer;
            $order->stripe_charge = $request->stripe_charge;
            $order->transaction_date = $request->transaction_date;

            $order->save();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        if ( $order && $order->delete() )
        {

        }
    }
}
