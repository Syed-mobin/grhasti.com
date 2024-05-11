<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addclient(){
        return view('party.add_parties');
    }

    public function manageparty(){
        return view('party.manage-party');
    }
}
