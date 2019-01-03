<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nationalSubscriptionController extends Controller
{
    public function nationalSubscription(){
        return view('innerPages.nationalSubscription');
    }
}
