<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class podcastController extends Controller
{
    public function podcast(){
        return view('innerPages.podcast');
    }
}
