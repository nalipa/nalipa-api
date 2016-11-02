<?php

namespace App\Http\Controllers;

use App\SecurityQuestion;
use Illuminate\Http\Request;

use App\Http\Requests;

class SecurityQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SecurityQuestion::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $securityQuestion = new SecurityQuestion();

        $securityQuestion->question = $request->question;

        if ( $securityQuestion->save() )
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
        $securityQuestion = SecurityQuestion::find($id);

        return $securityQuestion;
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
        $securityQuestion = SecurityQuestion::find($id);

        $securityQuestion->question = $request->question;

        if ( $securityQuestion )
        {
            $securityQuestion->save();
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
        $securityQuestion = SecurityQuestion::find($id);

        if ( $securityQuestion && $securityQuestion->delete() )
        {

        }
    }
}
