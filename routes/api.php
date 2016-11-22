<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout');
Route::get('me','Auth\LoginController@authenticatedUser');
Route::get('csrf','UserController@getcsrftoken');
Route::get('mailUs','UserController@mailUs');

Route::post('system','SystemController@addSystemInfo');
Route::get('system','SystemController@getSystemInfo');
Route::put('system','SystemController@updateSystemInfo');

//Route::group(array('middleware' => 'auth:api'), function()
//{


    Route::resource('orders', 'OrderController');
    Route::resource('transactions', 'TransactionController');
    Route::resource('selcomTransactions', 'SelcomTransactionController');
    Route::resource('stripeTransactions', 'StripeTransactionController');
    Route::resource('answers', 'AnswerController');


    // get objects by user Id
    Route::get('userTransactions/{user_id}','TransactionController@userTransactions');
    Route::get('userOrders/{user_id}','OrderController@userOrders');
    Route::post('rechargeCustomer','TransactionController@rechargeCustomer');

//});

    Route::resource('users', 'UserController');
    Route::resource('', 'ResourceController');
    Route::resource('serviceProviders', 'ServiceProviderController');
    Route::resource('providerTypes', 'ProviderTypeController');
    Route::resource('countries', 'CountryController');
    Route::resource('utilityCodes', 'UtilityCodeController');
    Route::resource('securityQuestions', 'SecurityQuestionController');
    Route::resource('amounts', 'AmountController');
    Route::resource('roles', 'RoleController');

