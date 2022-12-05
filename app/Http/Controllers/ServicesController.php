<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function index () {
        return view('pages.service');
    }

    function service($service) {
        return view('pages.services.' . $service );
    }
}