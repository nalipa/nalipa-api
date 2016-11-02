<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\StripeTransaction;
class StripeTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StripeTransaction::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stripeTransaction = new StripeTransaction();

        $stripeTransaction->order_id = $request->order_id;

        if ( $stripeTransaction->save() )
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
        $stripeTransaction = StripeTransaction::find($id);

        return $stripeTransaction;
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
        $stripeTransaction = StripeTransaction::find($id);

        $stripeTransaction->order_id = $request->order_id;

        if ( $stripeTransaction && $stripeTransaction->save() )
        {

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
        $stripeTransaction = StripeTransaction::find($id);

        if ( $stripeTransaction && $stripeTransaction->delete() )
        {

        }
    }
}
