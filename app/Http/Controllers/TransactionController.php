<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Transaction::all()->load('service_provider.utility_code');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function userTransactions($user_id)
    {
        return Transaction::all()->where('user_id','=',$user_id)->load('service_provider.utility_code');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();

//        $transaction->order_id = $request->order_id;
        $transaction->utility_code_id = $request->utility_code_id;
        $transaction->service_provider_id = $request->service_provider_id;
        $transaction->recipient = $request->recipient;
        $transaction->recipient_number = $request->recipient_number;
        $transaction->account_number = $request->account_number;
        $transaction->amount = $request->amount;
        $transaction->sms = $request->sms;
        $transaction->sms_result = $request->sms_result;
        $transaction->status = $request->status;
        $transaction->user_id = $request->user_id;

        if ( $transaction->save() )
        {

        }

        return response($transaction);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Transaction::find($id);
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
        $transaction = Transaction::find($id);

        if ( $transaction )
        {
//            $transaction->order_id = $request->order_id;
            $transaction->utility_code_id = $request->utility_code_id;
            $transaction->service_provider_id = $request->service_provider_id;
            $transaction->recipient = $request->recipient;
            $transaction->recipient_number = $request->recipient_number;
            $transaction->account_number = $request->account_number;
            $transaction->amount = $request->amount;
            $transaction->sms = $request->sms;
            $transaction->sms_result = $request->sms_result;
            $transaction->status = $request->status;
            $transaction->user_id = $request->user_id;

            $transaction->save();
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
        $transaction = Transaction::find($id);

        if ( $transaction && $transaction->delete() )
        {

        }
    }
}
