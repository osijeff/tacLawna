<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class announcementController extends Controller
{
    public function announcement(){
        return view('innerPages.announcement');
    }
}
