<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vailable_resources = array(
            'orders'=>array(
                'name'=>'orders',
                'url'=>url('/').'/api/orders'
            ),
           'providers'=> array(
               'name'=>'providers',
                'url'=>url('/').'/api/serviceProviders'
            ),
            'users'=> array(
                'name'=>'users',
                'url'=>url('/').'/api/users'
            ),
            'transactions'=> array(
                'name'=>'transactions',
                'url'=>url('/').'/api/transactions'
            ),
            'selcomTransactions'=> array(
                'name'=>'selcomTransactions',
                'url'=>url('/').'/api/selcomTransactions'
            ),
            'stripeTransactions'=> array(
                'name'=>'stripeTransactions',
                'url'=>url('/').'/api/stripeTransactions'
            ),
            'countries'=> array(
                'name'=>'countries',
                'url'=>url('/').'/api/countries'
            ),
            'answers'=> array(
                'name'=>'answers',
                'url'=>url('/').'/api/answers'
            ),
            'amounts'=> array(
                'name'=>'amounts',
                'url'=>url('/').'/api/amounts'
            ),
            'securityQuestions'=> array(
                'name'=>'securityQuestions',
                'url'=>url('/').'/api/securityQuestions'
            ),
            'utilityCodes'=> array(
                'name'=>'utilityCodes',
                'url'=>url('/').'/api/utilityCodes'
            ),
            'providerTypes'=> array(
                'name'=>'providerTypes',
                'url'=>url('/').'/api/providerTypes'
            ),
            'roles'=> array(
                'name'=>'roles',
                'url'=>url('/').'/api/roles'
            )
        );

        return json_encode($vailable_resources);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
