<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MprofileController extends Controller
{
    public function index() 
    {
        return view('Mprofile.index');
    }
}
