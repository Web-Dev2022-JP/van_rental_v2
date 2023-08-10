<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //client home
    public function clientHome(){
        return view('components.clients.home');
    }

    // client Services
    public function clientServices(){
        return view('components.clients.services');
    }

    // Client about
    public function clientAbout(){
        return view('components.clients.about');
    }
    // Client clientProfile
    public function clientProfile(){
        return view('components.clients.profile');
    }
    // Client clientLocation
    public function clientLocation(){
        return view('components.clients.location');
    }
    // Client Booked
    public function clientBooked(Request $request){
        // dd($request->id);
        // Now you can directly create a new record in the "trips" table
        $clientBooked = Booked::create([
            'user_id' => $request->id,
            'sender_id' => Auth::user()->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'contact' => $request->contact,
            'email' => $request->email,
            'destination' => $request->destination,
            'pickup' => $request->pickup,
            'landmark' => $request->landmark,
            'dateoftrip' => $request->dateoftrip,
            'pax' => $request->pax,
            'daysandhours' => $request->daysandhours,
            'pickuptime' => $request->pickuptime,
            'status' => 'pending'
            // Add other fields here
        ]);
        // Handle the case where the user with the given ID is not found
        return response()->json(['message' => 'Booking Successfully sent!','booking' => $clientBooked]);
    }
    // chatroom
    // public function chatRoom(Request $request){
    //     return view('components.clients.chatroom');
    // }

    public function getSeenMessageClient(Request $request){
        // user who login
        $outgoing_id = Auth::user()->id;
        // user who recieve a message
        $incoming_id = $request->incoming_id;

        $messages = DB::table('chats')
            ->select('chats.*', 'users.*', 'chats.created_at as chat_created_at')
            ->leftJoin('users', 'users.id', '=', 'chats.outgoing_msg_id')
            ->leftJoin('documents', 'documents.user_id', '=', 'users.id') // Assuming there's a user_id column in the Document table
            // ->where(function ($query) use ($outgoing_id, $incoming_id) {
            //     $query->where('outgoing_msg_id', $outgoing_id)
            //         ->where('incoming_msg_id', $incoming_id)
            //         ->where('read', 'seen'); // Add this condition to filter by 'unseen' messages
            // })
            // get the message for the specific users
            // remove for now where('outgoing_msg_id', $incoming_id)
            ->Where(function ($query) use ($outgoing_id, $incoming_id) {
                $query
                    ->where('incoming_msg_id', $outgoing_id);
                    // ->where('read', 'seen'); // Add this condition to filter by 'unseen' messages
            })
            ->orderBy('chats.id','desc')
            ->get();
            

        // Now, loop through the messages and fetch related documents for each user
        foreach ($messages as $message) {
            $userDocuments = DB::table('documents')
                ->where('user_id', $message->id) // Assuming user_id in documents table
                ->get();

            $message->documents = $userDocuments; // Attach documents to the message object
            // Convert created_at timestamp to time ago format
            $message->created_at = $this->getTimeAgo($message->chat_created_at);
        }

        return response()->json($messages);
    }

    // Function to convert timestamp to time ago format
    private function getTimeAgo($timestamp)
    {
        $currentTime = now();
        $previousTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);
        $diffInMinutes = $previousTime->diffInMinutes($currentTime);

        if ($diffInMinutes < 1) {
            return 'Just now';
        } elseif ($diffInMinutes < 60) {
            return $diffInMinutes . ' mins ago';
        } elseif ($diffInMinutes < 1440) {
            $diffInHours = floor($diffInMinutes / 60);
            return $diffInHours . ' hours ago';
        } else {
            $diffInDays = floor($diffInMinutes / 1440);
            return $diffInDays . ' days ago';
        }
    }
}
