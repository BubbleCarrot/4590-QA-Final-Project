<?php

namespace App\Http\Controllers;

use App\Mail\SendBookingMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    function index ($service = null) {

        $services = [
            'chiropractic_therapy' => 'Chiropractic therapy',
            'occupational_therapy' => 'Occupational therapy',
            'physical_therapy' => 'Physical therapy',
            'speech_therapy' => 'Speech therapy',
        ];

        $practitioners = [
            'Allyson Torrensen',
            'Declan McFinley',
            'James Mendoza',
            'Lily Washington',
            'Fay Park-Lemington',
            'Evan Azan',
            'Tina Ralls',
            'Maggie Moreau',
        ];


        if ($service) {
            $cleanString = str_replace('-', '_', $service);
            $selected_service = $cleanString;

            return view('pages.booking', compact('services', 'practitioners', 'selected_service'));
        }

        return view('pages.booking', compact('services', 'practitioners'));
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


        $mail_data = $r->all();
        $mail_data['text'] = 'Thanks for booking';
        $mail_data['subject'] = env('APP_NAME') . ' | Thanks for booking';

        // send conformation email
        Mail::to($r->email)->send(new SendBookingMail($mail_data));


        return redirect()->route('book.index')->with('status', 'Booking Successful');

    }
}