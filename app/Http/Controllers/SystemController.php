<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\System;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSystemInfo()
    {
        return System::all();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addSystemInfo(Request $request)
    {
        $system = System::find($request->id);

//        $system->system_name = $request->system_name;
//        $system->selcom_vendor = $request->selcom_vendor;
//        $system->selcom_pin = $request->selcom_pin;
//        $system->test_secret_key = "";
//        $system->test_publishable_key = "";
//        $system->live_secret_key = "";
//        $system->live_publishable_key = "";
//        $system->exchange_rate_percentage = "";
//        $system->transaction_fee_percentage = $request->transaction_fee_percentage;
//        $system->last_rate = $request->last_rate;
//        $system->exchange_rate = $request->exchange_rate;

        if ( $request->updated_attribute == 'vendor_info' )
        {
            $system->selcom_vendor = $request->selcom_vendor;
            $system->selcom_pin = $request->selcom_pin;
        }

        if ( $request->updated_attribute == 'fee_info' )
        {
            $system->transaction_fee_percent = $request->transaction_fee_percent;
        }

        if ( $request->updated_attribute == 'exchange_rate' )
        {
            $system->exchange_rate = $request->exchange_rate;
        }

        if ( $system->save() )
        {
                return response($system);
        }else{
            return response(['error']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSystemInfo(Request $request, $id)
    {
        $system = System::find($id);

        $system->system_name = $request->system_name;
        $system->selcom_vendor = $request->selcom_vendor;
        $system->selcom_pin = $request->selcom_pin;
//        $system->test_secret_key = $request->;
//        $system->test_publishable_key = $request->;
//        $system->live_secret_key = $request->;
//        $system->live_publishable_key = $request->;
//        $system->exchange_rate_percentage = $request->;
        $system->transaction_fee_percentage = $request->transaction_fee_percentage;
        $system->last_rate = $request->last_rate;
        $system->exchange_rate = $request->exchange_rate;

        if ( $system && $system->save() )
        {
            return response($system);
        }else{
            return response(['error']);
        }
    }


}
