<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\UserRoles;
use App\Http\Requests;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request){
        if (Auth::attempt(['email' =>$request->email, 'password' => $request->password])) {

            Auth::login(Auth::User(), true);
            $authenicatedUser = Auth::User();
            $user = User::find($authenicatedUser->id)->load('user_role.roles');
            return response()->json($user);
        } else {
            return response()->json('login failed');
        }
    }

    public function logout(Request $request){

        return response()->json(Auth::User());
    }

    public function authenticatedUser()
    {
        if (Auth::check()){
            $authenicatedUser = Auth::User();
            $user = User::find($authenicatedUser->id)->load('user_role.roles');
            return response()->json($user);
        }else{
            $authenicatedUser = Auth::User();
            $user = User::find($authenicatedUser->id)->load('user_role.roles');
            return response()->json($user);
        }
    }


}
