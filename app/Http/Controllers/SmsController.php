<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    public function send_sms(Request $request)
    {
        $phoneNumber = '+639388005027';
        $message = 'hello world';

        $customerId = config('services.telesign.customer_id');
        $apiKey = config('services.telesign.api_key');
        $apiSecret = config('services.telesign.api_secret');

        $response = Http::post("https://rest-api.telesign.com/v1/messaging/sms", [
            'json' => [
                'phone_number' => $phoneNumber,
                'message' => $message,
            ],
            'auth' => [$customerId, $apiKey],
        ]);

        if ($response->successful()) {
            return "SMS sent successfully!";
        } else {
            // Handle error
            return "Failed to send SMS: " . $response->body();
        }
    }
}
