<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    //
    public function checkout() {
    	return view('frontend.pages.checkout');
    }
}
