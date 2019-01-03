<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class youthController extends Controller
{
    public function youth(){
        return view('innerPages.youth');
    }
}
