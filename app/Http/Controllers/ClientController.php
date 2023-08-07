<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use Illuminate\Http\Request;
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
    public function chatRoom(Request $request){
        return view('components.clients.chatroom');
    }
}
