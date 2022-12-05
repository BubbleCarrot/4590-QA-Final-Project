<?php

namespace App\Http\Controllers;

use App\Mail\SendBookingMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    function index () {
        return view('pages.booking');
    }

    function send (Request $r) {

        $r->validate([
            'service' => 'required',
            'practitioner' => 'required',
            'time' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        // save in database
        $booking = new Booking();
        $booking->service = $r->service;
        $booking->practitioner = $r->practitioner;
        $booking->time = $r->time;
        $booking->name = $r->name;
        $booking->email = $r->email;
        $booking->phone_number = $r->phone_number;
        $booking->save();

        $mail_data = [
            "name" => env('APP_NAME'),
            "subject" => 'Demo',
            "message" => 'Demo message',
        ];

        // send conformation email
        Mail::to($r->email)->send(new SendBookingMail($mail_data));


        return redirect()->route('book.index')->with('status', 'Booking Successful');

    }
}
