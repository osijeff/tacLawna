<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class titheController extends Controller
{
    public function tithe(){
        return view('tithe');
    }
}