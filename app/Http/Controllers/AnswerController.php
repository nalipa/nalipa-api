<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Answer::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answer = new Answer();

        $answer->user_id = $request->user_id;
        $answer->question_id = $request->question_id;
        $answer->answer = $request->answer;

        if ( $answer->save() )
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
        $answer = Answer::find($id);

        return $answer;
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
        $answer = Answer::find($id);

        $answer->user_id = $request->user_id;
        $answer->question_id = $request->question_id;
        $answer->answer = $request->answer;

        if ( $answer )
        {
            $answer->save();
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
        $answer = Answer::find($id);

        if ( $answer && $answer->delete() )
        {

        }
    }
}
