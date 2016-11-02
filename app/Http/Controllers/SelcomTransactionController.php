<?php

namespace App\Http\Controllers;

use App\SelcomTransaction;
use Illuminate\Http\Request;

use App\Http\Requests;

class SelcomTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SelcomTransaction::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $selcomTransaction = new SelcomTransaction();

        $selcomTransaction->transaction_date = $request->transaction_date;
        $selcomTransaction->transaction_id = $request->transaction_id;
        $selcomTransaction->order_id = $request->order_id;
        $selcomTransaction->utility_code = $request->utility_code;
        $selcomTransaction->utility_ref = $request->utility_ref;
        $selcomTransaction->amount = $request->amount;
        $selcomTransaction->msisdn = $request->msisdn;
        $selcomTransaction->reference = $request->reference;
        $selcomTransaction->result_code = $request->result_code;
        $selcomTransaction->result = $request->result;
        $selcomTransaction->message = $request->message;
        $selcomTransaction->user_id = $request->user_id;

        if ( $selcomTransaction->save() )
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
        $selcomTransaction = SelcomTransaction::find($id);

        return $selcomTransaction;
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
        $selcomTransaction = SelcomTransaction::find($id);

        $selcomTransaction->transaction_date = $request->transaction_date;
        $selcomTransaction->transaction_id = $request->transaction_id;
        $selcomTransaction->order_id = $request->order_id;
        $selcomTransaction->utility_code = $request->utility_code;
        $selcomTransaction->utility_ref = $request->utility_ref;
        $selcomTransaction->amount = $request->amount;
        $selcomTransaction->msisdn = $request->msisdn;
        $selcomTransaction->reference = $request->reference;
        $selcomTransaction->result_code = $request->result_code;
        $selcomTransaction->result = $request->result;
        $selcomTransaction->message = $request->message;
        $selcomTransaction->user_id = $request->user_id;

        if ( $selcomTransaction )
        {
            $selcomTransaction->save();
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
        $selcomTransaction = SelcomTransaction::find($id);

        if ( $selcomTransaction && $selcomTransaction->delete() )
        {

        }
    }
}
