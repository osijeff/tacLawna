<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function indexpage()
    {
        return view('index');
    }
}
