<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\Client;
use App\Mail\OTPMail;

use App\Models\Document;
use App\Models\Verifytoken;
use Illuminate\Http\Request;
use App\Models\Temporaryfile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerDriver()
    {
        return view('auth.register-driver');
    }
    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => ['required', 'integer'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'birthplace' => ['required', 'string'],
            'contact' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthdate' => ['required', 'date'],
            'municipality' => ['required', 'string'],
            'zipcode' => ['required', 'integer'],
            'barangay' => ['required', 'string'],
            'street' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password'],

        ]);
        $client = User::create([
            'role' => 1,
            'is_activated' => 1, //activated account
            'approved' => 1,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'contact' => $request->contact,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'municipality' => $request->municipal,
            'zipcode' => $request->zipcode,
            'barangay' => $request->barangay,
            'street' => $request->street,
            'password' => Hash::make($request->password),
            // Rest of the attributes...
        ]);
        return redirect()->route('login')->with(['success' => 'Register successfully', 'is_activated'=>$client->is_activated]);
    }
    public function registerDriverPost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'role' => ['required', 'integer'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'middleName' => ['string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'birthplace' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'contact' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthdate' => ['required', 'date'],
            'municipality' => ['required', 'string'],
            'zipcode' => ['required', 'integer'],
            'barangay' => ['required', 'string'],
            'street' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password'],
            // 'idNumber' => ['required', 'integer'],
            // 'orcr' => ['required', 'integer'],
            // 'plateNumber' => ['required', 'string'],

        ]);

        // call temporaryfile model
        $temporaryfiles = Temporaryfile::all();
        if ($validator->fails()) {
            foreach ($temporaryfiles as $tempfile) {
                // delete the folder
                Storage::deleteDirectory('documents/tmp/' . $tempfile->folder);
                $tempfile->delete();
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

       

        // $user = User::create($validator->validated());
        
        // send otp first for email validation
        // $validToken = rand(10,100..'2023');
        // $get_token = new Verifytoken();
        // $get_token->token = $validToken;
        // $get_token->email = $request->email;
        // $get_token->save();
         // pass the request to a verify-Email function
        //  $this->verifyEmail($request);
        $get_user_email = $request->email;
        $get_user_name = $request->firstname." ".$request->lastname;
        Mail::to($request->email)->send(new OTPMail($get_user_email, "Submit your application, just click the link below.", $get_user_name, "Verify Email",'otp.verify-email'));
        // pass the request to a verify-Email function
         $this->verifyEmail($request);
        // Redirect to the login page with success and approval messages
        return redirect()->route('register.driver')->with([
            'success' => 'Register successfully',
            'approved' => 'We sent a verification link to your email!, Click the links below to continue the registration form.',
            'is_activated'=>false,
        ]);
        
        // // get the store file
        // $tmp_file = Temporaryfile::where('folder', $request->image)->first();


        // try {
        //     $validator = Validator::make($request->all(), [
        //         'name' => ['required', 'string', 'max:255'],
        //         // 'image' => ['required', 'image'], // Add this rule for the image field
        //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //         'password' => ['required', 'string', 'min:8'],
        //         'password_confirmation' => ['required', 'string', 'min:8', 'same:password']
        //     ]);

        //     // Set custom error messages
        //     $validator->setAttributeNames([
        //         // 'image' => 'The image field is required and must be an image file.',
        //         'email.unique' => 'The email has already been taken.'
        //     ]);

        //     if ($validator->fails()) {
        //         return redirect()->back()->withErrors($validator)->withInput();
        //     }

        //     // If the validation passes, proceed with file handling and user creation

        //     if ($tmp_file) {
        //         // copy the tmp                                             sstore to  new folder
        //         Storage::copy('license/tmp/' . $tmp_file->folder . '/' . $tmp_file->file, 'license/' . $tmp_file->folder . '/' . $tmp_file->file);
        //         // Create a new user instance
        //         $user = new User();

        //         // Set the user attributes
        //         $user->role = 2;
        //         $user->name = $request->name;
        //         $user->image = $tmp_file->folder . '/' . $tmp_file->file_name;
        //         $user->email = $request->email;
        //         $user->password = Hash::make($request->password);
        //         $user->approved = false;
        //         $user->save();
        //     }

        //     // delete the folder
        //     Storage::deleteDirectory('license/tmp/' . $tmp_file->folder);
        //     $tmp_file->delete();
        //     // Redirect to the login page with success and approval messages
        //     return redirect()->route('login')->with([
        //         'success' => 'Register successfully',
        //         'approved' => 'Your account is pending approval. Please wait for admin authorization.'
        //     ]);
        // } catch (QueryException $e) {
        //     // If there is a query exception (e.g., duplicate email), redirect back with an error message
        //     // return redirect()->back()->withErrors(['email' => 'The email has already been taken.'])->withInput();

        //     // Get the system error message
        //     $errorMessage = $e->getMessage();

        //     // Redirect back with the error message
        //     return redirect()->back()->withErrors(['email' => $errorMessage])->withInput();
        // }
    }

    // driver verify email
    public function verifyEmail(Request $request){
        // dd($request);
        $user = User::create([
            'role' => $request->role,
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'middlename' => $request->middleName,
            'gender' => $request->gender,
            'age' => $request->age,
            'birthplace' => $request->birthplace,
            'nationality' => $request->nationality,
            'contact' => $request->contact,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'municipality' => $request->municipality,
            'zipcode' => $request->zipcode,
            'barangay' => $request->barangay,
            'street' => $request->street,
            'password' => Hash::make($request->password),
            // 'idno' => $request->idNumber,
            // 'orcr' => $request->orcr,
            // 'platenumber' => $request->plateNumber,
            // Rest of the attributes...
        ]);

        // call temporaryfile model
        $temporaryfiles = Temporaryfile::all();
        foreach ($temporaryfiles as $tempfile) {
            // copy the tmp                                             sstore to  new folder
            Storage::copy('documents/tmp/' . $tempfile->folder . '/' . $tempfile->file, 'documents/' . $tempfile->folder . '/' . $tempfile->file);
            Document::create([
                'user_id' => $user->id,
                'name' => $tempfile->file,
                'path' => $tempfile->folder . '/' . $tempfile->file,
            ]);
            // delete the folder
            Storage::deleteDirectory('documents/tmp/' . $tempfile->folder);
            $tempfile->delete();
        }

        // Redirect to the login page with success and approval messages
        return redirect()->route('register.driver')->with([
            'success' => 'Email Verified successfully',
            'approved' => 'Verified email, your form is now submitted. Wait for administrator to approved your application.',
            'is_activated'=>false,
        ]);
    }

    public function verifyEmailPost(Request $request){
        $account = User::findOrFail($request->email);
        // Perform the necessary update logic
        $account->is_activated = 1;
        $account->save();
         // Redirect to the login page with success and approval messages
         return redirect()->route('register.driver')->with([
            'success' => 'Email Verified successfully',
            'approved' => 'Verified email, your form is now submitted. Wait for administrator to approved your application.',
            'is_activated'=>false,
        ]);
    } 

    // email verified
    public function emailVerified(Request $request, $email){
        // dd($email);
        $account = User::where('email',$email)->first();
        
        if($account){
            $account->approved = 1;
            $account->is_activated = 1;
            $account->save();
            
        }
        // Redirect to the login page with success and approval messages
        return redirect()->route('login')->with([
            'success' => 'Email Verified successfully',
            'approved' => 'Verified email, your form is now submitted. Wait for administrator to approved your application.',
        ]);
    }

    // uploads tmp
    public function tmpUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            // Generate a unique folder name for storing the image
            $folder = uniqid('profile', true);

            // Store the image in the specified folder
            $image->storeAs('profile/tmp/' . $folder, $file_name);
            Temporaryfile::create([
                'folder' => $folder,
                "file" => $file_name,
            ]);
            return $folder;
        }
    }

    // delete
    public function tmpDelete()
    {
        $tmp_file = Temporaryfile::where('folder', request()->getContent())->first();
        if ($tmp_file) {
            // delete the folder
            Storage::deleteDirectory('documents/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    public function login()
    {
        // get the session on the email

        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
    


        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        
            // Get the user account by email
            $user = User::where('email', $request->email)->first();

            if ($user) {
                // Check if the user is a driver and if the account is activated
                if ($user->role == 2 && $user->is_activated == 1) {
                    $credentials = [
                        // 'otp' => $request->otp,
                        'email' => $request->email,
                        'password' => $request->password,
                    ];
                    //get the token from verify
                    $get_token = Verifytoken::where('token', $request->otp)->first();
                    if ($get_token) {
                        $get_token->is_activated = 2;
                        $get_token->save();

                        // updates the user account
                        $user = User::where('email',$get_token->email)->first();
                        $user->is_activated = 2;
                        $user->save();

                        // delete the token
                        $getting_token = Verifytoken::where('token',$get_token->token)->first();
                        $getting_token->delete();
                    }else{
                        Auth::logout();
                        // User is a driver pending approval ,'is_activated'=>$user->is_activated
                        return redirect()->route('login')->with(['is_activated'=> 0, 'approved'=>"You need O T P a to proceed."]);
                    }
                } else {
                    $credentials = [
                        'email' => $request->email,
                        'password' => $request->password,
                    ];
                }
            } else {
                // Handle the case when the user account does not exist
                // You can add your own logic here, such as showing an error message
                // or redirecting the user to a specific page
            }
        

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 1) {
                // User is a client
                return redirect('/client-dashboard')->with([
                    'success' => 'Login Success',
                    'name' => $user->firstname,
                    'showAlert' => true
                ]);
            } elseif ($user->role == 2) {
                if ($user->approved) {
                    // User is an approved driver
                    return redirect('/driver-dashboard')->with(['success'=>'Login Success','is_activated'=>$user->is_activated]);
                } else {
                    // need to logout if not approved
                    Auth::logout();
                    // User is a driver pending approval ,'is_activated'=>$user->is_activated
                    return redirect()->route('login')->with(['approved'=>'Email verification success!. However your account is pending approval. Please wait for Bataan Van Rental Administrator authorization.']);
                }
            } elseif ($user->role == 3) {
                // User is an admin
                return redirect('/admin-dashboard')->with('success', 'Login Success');
            }
        }

        return back()->with('error', 'Invalid email or password');






        // // for administrator
        // if($request->email === 'administrator@email.com'){
        //     $credentials = [
        //         'email' => $request->email,
        //         'password' => $request->password,
        //     ];
        // }

        // // get the accounts credentails for driver
        // $driver = User::where('email',$request->email)->first();
        // if($driver){
        //     if($driver->is_activated === 0){
        //         $credentials = [
        //             'otp' => $request->otp,
        //             'email' => $request->email,
        //             'password' => $request->password,
        //         ];
        //     }else{
        //         $credentials = [
        //             'email' => $request->email,
        //             'password' => $request->password,
        //         ];
        //     }
        // }else{

        // }

        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();

        //     if ($user->role == 1) {
        //         // User is a client
        //         return redirect('/client-dashboard')->with([
        //             'success' => 'Login Success',
        //             'name' => $user->firstname,
        //             'showAlert' => true
        //         ]);
        //     } elseif ($user->role == 2) {
        //         if ($user->approved) {
        //             // User is an approved driver
        //             return redirect('/driver-dashboard')->with('success', 'Login Success');
        //         } else {
        //             // need to logout if not approved
        //             Auth::logout();
        //             // User is a driver pending approval
        //             return redirect()->route('login')->with('approved', 'Your account is pending approval. Please wait for Bataan Van Rental Administrator authorization.');
        //         }
        //     } elseif ($user->role == 3) {
        //         // User is an admin
        //         return redirect('/admin-dashboard')->with('success', 'Login Success');
        //     }
        // }

        // return back()->with('error', 'Invalid email or password');








        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // Attempt authentication for User
        // if (Auth::guard('web')->attempt($credentials)) {
        //     $user = Auth::guard('web')->user();
        //     if ($user->role == 2) {
        //         if ($user->approved) {
        //             // User is an approved driver
        //             return redirect('/driver-dashboard')->with('success', 'Login Success');
        //         } else {
        //             // need to logout if not approved
        //             Auth::guard('web')->logout();
        //             // User is a driver pending approval
        //             return redirect()->route('login')->with('approved', 'Your account is pending approval. Please wait for Bataan Van Rental Administrator authorization.');
        //         }
        //     } elseif ($user->role == 3) {
        //         // User is an admin
        //         return redirect('/admin-dashboard')->with('success', 'Login Success');
        //     }
        // }

        // // Attempt authentication for Client
        // if (Auth::guard('client')->attempt($credentials)) {
        //     $client = Auth::guard('client')->user();
        //     // Handle the logic for Client login
        //     return redirect('/client-dashboard')->with([
        //         'success' => 'Login Success',
        //         'name' => $client->name,
        //         'showAlert' => true
        //     ]);
        // }

        // return back()->with('error', 'Invalid email or password');

    }

    // public function loginClient(Request $request)
    // {
    //     $credentials = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];
    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         if ($user->role == 1) {
    //             // User is a client
    //             return redirect('/client-dashboard')->with([
    //                 'success' => 'Login Success',
    //                 'name' => $user->name,
    //                 'showAlert' => true
    //             ]);
    //         } 
    //     }

    //     return back()->with('error', 'Invalid email or password');
    // }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('logout', true);
    }
}
