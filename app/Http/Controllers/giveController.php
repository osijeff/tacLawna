<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class giveController extends Controller
{
     public function give()
    {
        return view('innerPages.give');
        
    }
}
