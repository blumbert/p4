<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ShoeController extends Controller
{
    public function index() {
        // get the user
        $user = Auth::user();

        // create shoes array
        $shoes = [];

        if ($user)
            // get the shoes for the user
            $shoes = $user->shoes()->get();

        return view('shoe.index')->with([
            'shoes' => $shoes
        ]);
    }
}
