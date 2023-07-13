<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OTPMail;
use App\Models\Document;
use App\Models\Verifytoken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function fetchAccountApproval(){
        // this is for driver only
        $accounts = User::where('is_activated', 1)->where('role', 2)->orderBy('created_at', 'desc')->get();

        return response()->json($accounts);
    }

    public function approve($id)
    {
        // dd($id);
        // Find the account based on the provided ID
        $account = User::findOrFail($id);
        // Perform the necessary update logic
        $account->approved = 1;
        // test
        $account->is_activated = 1;
        $account->save();

        $validToken = rand(10,100..'2023');
        $get_token = new Verifytoken();
        $get_token->token = $validToken;
        $get_token->email = $account->email;
        $get_token->save();
        $get_user_email = $account->email;
        $get_user_name = $account->firstname." ".$account->lastname;
        // Mail::to($account->email)->send(new OTPMail($get_user_email, "", $get_user_name));
        Mail::to($account->email)->send(new OTPMail($get_user_email, $validToken, $get_user_name, "O T P Mail.",'otp.otp'));
        // Return a response or redirect as needed
        return response()->json(['message' => 'Account approved successfully', 'status'=>'success', 'acount'=>$account]);
    }

    public function getById(Request $request, $id){
        $documents = User::find($id)->documents()->with('user')->orderBy('name')->get();
        
       return response()->json($documents);
    }
}
