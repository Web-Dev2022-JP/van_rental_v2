<?php

namespace App\Http\Controllers;

use App\Models\Reciept;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Temporaryfile;
use App\Events\NotificationEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RecieptController extends Controller
{
   // uploads tmp
   public function tmpUploadReciept(Request $request)
   {
    //    dd($request);
    if ($request->hasFile('reciept')) {
        $image = $request->file('reciept');
        $file_name = $image->getClientOriginalName();
        // Generate a unique folder name for storing the image
        $folder = uniqid('reciept', true);
        // Generate a unique UUID
        $uploadedId = (string) Str::uuid();
        // Store the image in the specified folder
        $image->storeAs('reciept/tmp/' . $folder, $file_name);
        
        $uploadedRecord = Temporaryfile::create([
            'user_id' => Auth::user(),
            'uuid' => $uploadedId,
            'folder' => $folder,
            "file" => $file_name,
        ]);
        
        return response()->json(['uploaded_record' => $uploadedRecord]);
    }
    
   }

   // problem in here not deleteing
   public function tmpDeleteReciept(Request $request)
{
    dd($request);
    $folderName = request()->getContent();
   
    $tmp_file = Temporaryfile::where('folder', $folderName)->first();

    if ($tmp_file) {
        // Delete the folder and its contents
        Storage::deleteDirectory('reciept/tmp/' . $tmp_file->folder);

        // Delete the record from the database
        $tmp_file->delete();

        return response()->json(['message' => 'Receipt deleted successfully']);
    } else {
        return response()->json(['message' => 'Receipt not found'], 404);
    }
}


// send DRiver a reciept
public function tmpSendReciept(Request $request){
    // dd($request->folder);
    // call temporaryfile model
    $temporaryfiles = Temporaryfile::where('folder', $request->folder)->first();
    // dd($temporaryfiles->uuid);
    // foreach ($temporaryfiles as $tempfile) {
    // copy the tmp                                             sstore to  new folder
    Storage::copy('reciept/tmp/' . $temporaryfiles->folder . '/' . $temporaryfiles->file, 'reciept/' . $temporaryfiles->folder . '/' . $temporaryfiles->file);
    Reciept::create([
        'user_id' => Auth::user()->id,
        'reciept' => $temporaryfiles->file,
        'path' => $temporaryfiles->folder . '/' . $temporaryfiles->file,
    ]);
    // delete the folder
    Storage::deleteDirectory('reciept/tmp/' . $temporaryfiles->folder);
    $temporaryfiles->delete();
    // trigger the event notify
    event(new NotificationEvent(Auth::user()->firstname));
    // Optionally, you can return the updated user data in the response
    return response()->json(['message' => 'sent successfully'], 200);
}
}
