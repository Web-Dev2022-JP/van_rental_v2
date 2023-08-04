<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use App\Models\User;
use Illuminate\Http\Request;

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
    
}
