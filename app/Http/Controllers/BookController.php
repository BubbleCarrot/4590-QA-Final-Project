<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index () {
        return view('pages.booking');
    }

    function send (Request $r) {



        $r->validate([
            'service' => ['required'],
            'practitioner' => 'required',
            'time' => 'required',
            'name' => 'required|email',
            'phone_number' => 'required',
        ]);

        return view('pages.home');
    }
}