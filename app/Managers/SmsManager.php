<?php

namespace App\Managers;

class SmsManager
{
    public static function client_content($client,$driver){
        $data = "Dear ".$client['firstname']." ". $client['lastname'].",
We are delighted to inform you that you are booking with Bataan Van Services has been successfully confirmed!
Booking Details:
- Drivers Name: ".$driver['firstname'] ." " .$driver['lastname']."
- Date and Time of Booking: ".date("M d, Y", strtotime($client['dateoftrip'])). " | " . date("h:i: A", strtotime($client['pickuptime']))."
- Pickup Location: ".$client['pickup']."
- Drop-off Location: ".$client['destination']."
- Number of Passengers: ".$client['pax']."
Our team is now busy preparing to ensure a safe and comfortable journey for you and your fellow passengers. Our experienced drivers and well-maintained vehicles are ready to provide you with a seamless and enjoyable travel experience.
Thank you for choosing Bataan Van Services for your transportation needs. We look forward to serving you and providing you with an exceptional travel experience.
Safe travels!";

        return $data;
    }

    public static function request_approved($name){
        $data = "Hello ".$name.",
We're thrilled to inform you that your request has been successfully approved by Bataan Van Services!";
        return $data;
    } 

    public static function driver_content($client,$driver){
       $data = "Hi ".$client['firstname']." ". $client['lastname'].",
Great news! A new booking has just come in for Bataan Van Services.
Booking Details:
- Drivers Name: ".$driver['firstname'] ." " .$driver['lastname']."
- Date and Time of Booking: ".date("M d, Y", strtotime($client['dateoftrip'])). " | " . date("h:i: A", strtotime($client['pickuptime']))."
- Pickup Location: ".$client['pickup']."
- Drop-off Location: ".$client['destination']."
- Number of Passengers: ".$client['pax']."
Please make sure to arrive on time and provide the best service to our valued customer.
Thank you for your dedication and safe driving!";
        return $data;
    }

}
