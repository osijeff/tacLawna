<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class childrenController extends Controller
{
    public function children(){
        return view('innerPages.children');
    }
}

