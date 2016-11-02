<?php

namespace App\Http\Controllers;

use App\ServiceProvider;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiceProvider::all()->load('utility_code');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serviceProvider = new ServiceProvider();

        $serviceProvider->name = $request->name;
        $serviceProvider->product = $request->product;
        $serviceProvider->utility_code_id = $request->utility_code_id;

        if ( $serviceProvider->save() )
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
        $serviceProvider = ServiceProvider::find($id);

        return $serviceProvider;
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
        $serviceProvider = ServiceProvider::find($id);

        $serviceProvider->name = $request->name;
        $serviceProvider->product = $request->product;
        $serviceProvider->utility_code_id = $request->utility_code_id;

        if ( $serviceProvider )
        {
            $serviceProvider->save();
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
        $serviceProvider = ServiceProvider::find($id);

        if ( $serviceProvider && $serviceProvider->delete() )
        {

        }
    }
}
