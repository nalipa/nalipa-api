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
                'url'=>'http://localhost/nalipa_api/public/index.php/api/orders'
            ),
           'providers'=> array(
               'name'=>'providers',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/serviceProviders'
            ),
            'users'=> array(
                'name'=>'users',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/users'
            ),
            'transactions'=> array(
                'name'=>'transactions',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/transactions'
            ),
            'selcomTransactions'=> array(
                'name'=>'selcomTransactions',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/selcomTransactions'
            ),
            'stripeTransactions'=> array(
                'name'=>'stripeTransactions',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/stripeTransactions'
            ),
            'countries'=> array(
                'name'=>'countries',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/countries'
            ),
            'answers'=> array(
                'name'=>'answers',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/answers'
            ),
            'amounts'=> array(
                'name'=>'amounts',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/amounts'
            ),
            'securityQuestions'=> array(
                'name'=>'securityQuestions',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/securityQuestions'
            ),
            'utilityCodes'=> array(
                'name'=>'utilityCodes',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/utilityCodes'
            ),
            'providerTypes'=> array(
                'name'=>'providerTypes',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/providerTypes'
            ),
            'roles'=> array(
                'name'=>'roles',
                'url'=>'http://localhost/nalipa_api/public/index.php/api/roles'
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
