<?php

namespace App\Http\Controllers;

use App\UtilityCode;
use Illuminate\Http\Request;

use App\Http\Requests;

class UtilityCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UtilityCode::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilityCode = new UtilityCode();

        $utilityCode->utility_code = $request->utility_code;

        if ( $utilityCode->save() )
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
        $utilityCode = UtilityCode::find($id);

        return $utilityCode;
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
        $utilityCode = UtilityCode::find($id);

        $utilityCode->utility_code = $request->utility_code;

        if ( $utilityCode )
        {
            $utilityCode->save();
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
        $utilityCode = UtilityCode::find($id);

        if ( $utilityCode && $utilityCode->delete() )
        {

        }
    }
}
