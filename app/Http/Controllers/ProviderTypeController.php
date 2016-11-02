<?php

namespace App\Http\Controllers;

use App\ProviderType;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProviderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return ProviderType::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $providerType = new ProviderType();

        $providerType->reference = $request->reference;
        $providerType->type =   $request->type;

        if ( $providerType->save() )
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
        $providerType = ProviderType::find($id);

        return $providerType;
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
        $providerType = ProviderType::find($id);

        $providerType->reference = $request->reference;
        $providerType->type =   $request->type;

        if ( $providerType )
        {
            $providerType->save();
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
        $providerType = ProviderType::find($id);

        if ( $providerType && $providerType->delete() )
        {

        }
    }
}
