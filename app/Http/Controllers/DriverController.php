<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Booked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function getUserCredentials (Request $request, $id){
        // dd($id);
        $driver = User::with(['documents', 'vans', 'locations'])->find($id);
       // If the user with the given ID exists
    if ($driver) {
        // Now you can access the user's documents, vans, and locations
        $user = $driver; // The main user data

        // Do something with the retrieved data
        // For example, return the data as JSON
        return response()->json([
            'user' => $user
        ]);
    } else {
        // Handle the case where the user with the given ID is not found
        return response()->json(['error' => 'User not found'], 404);
    }
    }

    public function getAllClientBooked(Request $request, $id){
        $booked = Booked::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return response()->json($booked);
    }

    // return chat page
    public function chatRoomDriver(){
        return view('components.drivers.chatroom');
    }

    // send Message to client
    public function sendClientMessage(Request $request){
        $message = new Chat();
        $message->incoming_msg_id = $request->incoming_id;
        $message->outgoing_msg_id = Auth::user()->id;
        $message->msg = $request->message;
        $message->save();
        return response()->json(['status'=>'success']);
    }

    // get message
    public function getClientMessage(Request $request){
        // use Illuminate\Support\Facades\DB;
        $outgoing_id = Auth::user()->id;
        $incoming_id = $request->incoming_id;
        $messages = DB::table('chats')
            ->select('chats.*', 'users.*')
            ->leftJoin('users', 'users.id', '=', 'chats.outgoing_msg_id')
            ->leftJoin('documents', 'documents.user_id', '=', 'users.id') // Assuming there's a user_id column in the Document table
            ->where(function($query) use ($outgoing_id, $incoming_id) {
                $query->where('outgoing_msg_id', $outgoing_id)
                    ->where('incoming_msg_id', $incoming_id);
            })
            ->orWhere(function($query) use ($outgoing_id, $incoming_id) {
                $query->where('outgoing_msg_id', $incoming_id)
                    ->where('incoming_msg_id', $outgoing_id);
            })
            ->orderBy('chats.id')
            ->get();

            // Now, loop through the messages and fetch related documents for each user
            foreach ($messages as $message) {
                $userDocuments = DB::table('documents')
                    ->where('user_id', $message->id) // Assuming user_id in documents table
                    ->get();

                $message->documents = $userDocuments; // Attach documents to the message object
            }
        return response()->json($messages);
        // $messages now contains the fetched messages
        
    }
    
}
