<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class believesController extends Controller
{
     public function believes(){
        return view('innerPages.believes');
    }
}
