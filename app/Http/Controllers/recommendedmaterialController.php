<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recommendedmaterialController extends Controller
{
    public function recommendedmaterial(){
        return view('books');
    }
}
