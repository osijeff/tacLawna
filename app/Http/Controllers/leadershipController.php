<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leadershipController extends Controller
{
    public function leadership(){
        return view('innerPages.leadership');
    }
}
