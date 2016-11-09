<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all()->load('role');
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->role_id = $request->input('role_id',1);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->alt_phone_number = $request->input('alt_phone_number', ''); // default empty
        $user->address = $request->input('address', '');
        $user->city_town = $request->input('city_town', '');
        $user->country = $request->input('country', '');
        $user->security_question = $request->security_question;
        $user->answer = $request->answer;
        $user->receive_notification = $request->input('receive_notification', 1);
        $user->agreed_to_terms = $request->input('agreed_to_terms', 1);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {

            $user = User::find($user->id);

            return response()->json($user);

        } else {



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
        return User::find($id)->load('role');
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
        $user = User::find($id);

        if ($user) {

            $user->role_id = $request->role_id;
            $user->first_name = $request->first_name;
            $user->middle_name = $request->middle_name;
            $user->last_name = $request->last_name;
            $user->phone_number = $request->phone_number;
            $user->alt_phone_number = $request->input('alt_phone_number', ''); // default empty
            $user->address = $request->address;
            $user->city_town = $request->city_town;
            $user->country = $request->country;
            $user->security_question = $request->security_question;
            $user->answer = $request->answer;
            $user->receive_notification = $request->receive_notification;
            $user->agreed_to_terms = $request->agreed_to_terms;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->save();
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
        $user = User::find($id);

        if ( $user && $user->delete() )
        {

        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcsrftoken()
    {
        return response()->json(Crypt::encrypt(csrf_token()));
    }
}
