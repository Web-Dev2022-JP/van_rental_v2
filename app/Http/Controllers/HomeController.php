<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OTPMail;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\Temporaryfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    // client controller
    public function client()
    {
        return view('dashboard.client-dashboard');
    }
    // driver controller
    public function driver()
    {
        return view('dashboard.driver-dashboard');
    }
    // admin controller
    public function admin()
    {
        return view('dashboard.admin-dashboard');
    }

    // register vehicle
    public function registerVehicle(){
        return view('dashboard.driver.register-vehicle');
    }
    // register vehicle post
    public function registerVehiclePost(Request $request){
        $validator = Validator::make($request->all(), [
            // 'id' => ['required', 'integer'],
            'idNumber' => ['required', 'integer'],
            'orcr' => ['required', 'integer'],
            'plateNumber' => ['required', 'string'],
        ]);

        // call temporaryfile model
        $temporaryfiles = Temporaryfile::all();
        if ($validator->fails()) {
            foreach ($temporaryfiles as $tempfile) {
                // delete the folder
                Storage::deleteDirectory('vehicle/tmp/' . $tempfile->folder);
                $tempfile->delete();
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($request->id);
        if($user){
            $user->update([
                'is_activated' => 0,
                'idno' => $request->idNumber,
                'orcr' => $request->orcr,
                'platenumber' => $request->plateNumber,

            ]);

            // call temporaryfile model
        $temporaryfiles = Temporaryfile::all();
        foreach ($temporaryfiles as $tempfile) {
            // copy the tmp                                             sstore to  new folder
            Storage::copy('vehicle/tmp/' . $tempfile->folder . '/' . $tempfile->file, 'vehicle/' . $tempfile->folder . '/' . $tempfile->file);
            Document::create([
                'user_id' => $user->id,
                'name' => $tempfile->file,
                'path' => $tempfile->folder . '/' . $tempfile->file,
            ]);
            // delete the folder
            Storage::deleteDirectory('vehicle/tmp/' . $tempfile->folder);
            $tempfile->delete();
        }

        }else{
            return redirect()->route('register.driver')->with([
                'approved' => 'Error Sending!',
            ]);
        }
        
        Mail::to($user->email)->send(new OTPMail($user->email, "Registration for your vehicle is sent successfully!", $user->name, "Registration sent",'otp.vehicle-registration'));

         // Redirect to the login page with success and approval messages
         return redirect()->route('register.vehicle')->with([
            'success' => 'Email Verified successfully',
            'approved' => 'Registration of vehicle is submitted!, your form is now submitted. Wait for administrator to approved your application.',
            'is_activated'=>false,
        ]);
    }

     // uploads tmp
     public function tmpUploadVehicle(Request $request)
     {
         if ($request->hasFile('image')) {
             $image = $request->file('image');
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
     // delete
    public function tmpDeleteVehicle()
    {
        $tmp_file = Temporaryfile::where('folder', request()->getContent())->first();
        if ($tmp_file) {
            // delete the folder
            Storage::deleteDirectory('vehicle/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    // about driver
    public function about(){
        return view('dashboard.client.about');
    }
    // inquiry
    public function inquiry(){
        return view('dashboard.client.inquire');
    }

    public function messageDriver() {
        return view('dashboard.client.message-driver');
    }

    public function complainDriver() {
        return view('dashboard.client.complain-driver');
    }
}
