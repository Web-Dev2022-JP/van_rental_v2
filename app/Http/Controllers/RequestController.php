<?php

namespace App\Http\Controllers;

use App\Models\Van;
use App\Models\User;
use App\Mail\OTPMail;
use App\Models\Document;
use App\Models\Verifytoken;
use Illuminate\Http\Request;
use App\Models\Temporaryfile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RequestController extends Controller
{
    public function fetchAccountApproval(){
        // this is for driver only
        $accounts = User::where('is_activated', 1)->where('role', 2)->orderBy('created_at', 'desc')->get();
        if($accounts->isEmpty()){
            $accounts = User::where('is_activated', 0)->where('role', 2)->orderBy('created_at', 'desc')->get();
        }
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
        // $documents = User::find($id)->documents()->with('user')->orderBy('name')->get();
            // Find the user with the specified ID and eager load both documents and vans along with the user details
            $documents = User::with(['documents', 'vans'])->find($id);
           return response()->json($documents);

    }

    public function editRegistration(Request $request){
        // dd($request);
        // Validate the input data from the request (you can customize the validation rules)
        // $validatedData = $request->validate([
        //     'email' => 'required|email|unique:users',
        //     // Add other fields you want to validate and update here
        // ]);

        // Find the user with the given ID
        $user = User::find($request->id);
        // Alternatively, you can directly use the user relationship to get the Van record
        // If you want to find the Van record using the user_id foreign key
        $van = Van::where('user_id', $user->id)->first();   
        // dd($user);
        // Check if the user exists
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        $user->firstname = $request->firstName;
        $user->lastname = $request->lastName;
        $user->middlename = $request->middleName;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->birthplace = $request->birthplace;
        $user->nationality = $request->nationality;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->birthdate = $request->birthdate;
        $user->municipality = $request->municipality;
        $user->zipcode = $request->zipcode;
        $user->barangay = $request->barangay;
        $user->street = $request->street;
        $user->idno = $request->idNumber;
        $user->orcr = $request->orcr;
        $user->platenumber = $request->plateNumber;
       

        $van->idnumber = $request->idNumber;
        $van->orcr = $request->orcr;
        $van->platenumber = $request->plateNumber;
        $van->companyname = $request->companyName;
        $van->ac = $request->ac;
        $van->model = $request->model;
        $van->bag = $request->bags;
        $van->seat = $request->seats;
        $van->fuel = $request->fuel;

        $user->save();
        $van->save();
        // Update the user data with the validated input
        // $user->update($validatedData);

        
        // Optionally, you can return the updated user data in the response
        return response()->json(['message' => 'User updated successfully', 'user' => $user], 200);

    }

    // upload vehicle images
    // uploads tmp
    public function tmpUploadVehicleProfile(Request $request)
    {
        
        if ($request->hasFile('imageVehicleProfile')) {
            $image = $request->file('imageVehicleProfile');
            $file_name = $image->getClientOriginalName();
            // Generate a unique folder name for storing the image
            $folder = uniqid('vehicle', true);

            // Store the image in the specified folder
            $image->storeAs('vehicle/tmp/' . $folder, $file_name);
            Temporaryfile::create([
                'folder' => $folder,
                "file" => $file_name,
            ]);
            return $folder;
        }
    }
    public function tmpDeleteVehicleProfile()
    {
        $tmp_file = Temporaryfile::where('folder', request()->getContent())->first();
        if ($tmp_file) {
            // delete the folder
            Storage::deleteDirectory('vehicle/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }
}
