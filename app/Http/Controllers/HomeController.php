<?php

namespace App\Http\Controllers;

use App\Mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    function index () {
        return view('pages.home');
    }

    function send (Request $r) {

        $r->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $mail_data = $r->all();
        $mail_data['text'] = 'Thanks for contacting us';
        $mail_data['subject'] = env('APP_NAME') . ' | Thanks for contacting';

        Mail::to($r->email)->send(new SendContactMail($mail_data));

        return redirect()->route('home.index')->with('status', 'Contact Successful');

    }
}