<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GstBillingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function manageinvoice(){
    //     return view('invoice.manageinvoice');
    // }

    // public function createinvoice(){
    //     return view('invoice.invoice');
    // }
}
