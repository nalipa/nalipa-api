<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Transaction::all()->load('service_provider.utility_code','user');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function userTransactions($user_id)
    {
//       return Transaction::all()->where('user_id','=',$user_id)->load('service_provider.utility_code');
       return Transaction::with('service_provider.utility_code')->where('user_id','=',$user_id)->get();

    }



    /**
     * process selcom payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rechargeCustomer(Request $request)
    {
        $xml_data ="<methodCall>
                    <methodName>SELCOM.utilityPayment</methodName>
                    <params>
                    <param>
                    <value>
                    <struct>
                    <member>
                    <name>vendor</name>
                    <value>
                    <string>BIONICIT</string>
                    </value>
                    </member>
                    <member>
                    <name>pin</name>
                    <value>
                    <string>1976</string>
                    </value>
                    </member>
                    <member>
                    <name>utilitycode</name>
                    <value>
                    <string>".$request->utilityCode."</string>
                    </value>
                    </member>
                    <member>
                    <name>utilityref</name>
                    <value>
                    <string>".$request->utilityRef."</string>
                    </value>
                    </member>
                    <member>
                    <name>transid</name>
                    <value>
                    <string>".$request->transactionId."</string>
                    </value>
                    </member>
                    <member>
                    <name>amount</name>
                    <value>
                    <string>".$request->amount."</string>
                    </value>
                    </member>
                    </struct>
                    </value>
                    </param>
                    </params>
                    </methodCall>";


        $URL = "https://paypoint.selcommobile.com/api/selcom.pos.server.php";

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$URL);
//        curl_setopt($ch, CURLOPT_MUTE, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $selcomResponse = curl_exec($ch);
        curl_close($ch);
        return response($selcomResponse);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();

//        $transaction->order_id = $request->order_id;
        $transaction->utility_code_id = $request->utility_code_id;
        $transaction->service_provider_id = $request->service_provider_id;
        $transaction->recipient = $request->recipient;
        $transaction->recipient_number = $request->recipient_number;
        $transaction->account_number = $request->account_number;
        $transaction->amount = $request->amount;
        $transaction->sms = $request->sms;
        $transaction->sms_result = $request->sms_result;
        $transaction->status = $request->status;
        $transaction->user_id = $request->user_id;

        if ( $transaction->save() )
        {

        }

        return response($transaction);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notifyBySMS(Request $request)
    {
        $username = "bionictz";
        $password = "bionicsms";
        $apikey   = "d2006f82-c381-11e0-bbe6-00185176683e";
        $destnum  = urlencode("+255".substr($request->recipient_number,1,9));
        $sendername = "Nalipa";
        $sms = urlencode($request->sms);


        $posturl = "http://www.bongolive.co.tz/api/sendSMS.php?sendername=".$sendername."&username=".$username."&password=".$password."&apikey=".$apikey."&destnum=".$destnum."&message=".$sms;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$posturl);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $response=curl_exec($ch);

        return response($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Transaction::find($id);
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
        $transaction = Transaction::find($id);

        if ( $transaction )
        {
//            $transaction->order_id = $request->order_id;
            $transaction->utility_code_id = $request->utility_code_id;
            $transaction->service_provider_id = $request->service_provider_id;
            $transaction->recipient = $request->recipient;
            $transaction->recipient_number = $request->recipient_number;
            $transaction->account_number = $request->account_number;
            $transaction->amount = $request->amount;
            $transaction->sms = $request->sms;
            $transaction->sms_result = $request->sms_result;
            $transaction->status = $request->status;
            $transaction->user_id = $request->user_id;

            $transaction->save();
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
        $transaction = Transaction::find($id);

        if ( $transaction && $transaction->delete() )
        {

        }
    }
}
