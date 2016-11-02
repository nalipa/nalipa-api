<?php

namespace App\Http\Controllers;

use App\Amount;
use Illuminate\Http\Request;

use App\Http\Requests;

class AmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Amount::all()->load('utility_code');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amount = new Amount();

        $amount->amount = $request->amount;
        $amount->utility_code_id = $request->utility_code_id;

        if ( $amount->save() )
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
        $amount = Amount::find($id);

        return $amount;
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
        $amount = Amount::find($id);

        $amount->amount = $request->amount;
        $amount->utility_code_id = $request->utility_code_id;

        if ( $amount )
        {
            $amount->save();
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
        $amount = Amount::find($id);

        if ( $amount && $amount->delete() )
        {

        }
    }
}
