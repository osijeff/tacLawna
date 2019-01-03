<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materialDonationController extends Controller
{ public function materialDonation()
    {
        return view('materialsDonate');
    }
}
