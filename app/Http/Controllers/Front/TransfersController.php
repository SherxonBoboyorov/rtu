<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransfersController extends Controller
{
    public function transfer()
    {

        $transfers = Transfer::all();
        return view('front.transfer', compact('transfers'));
    }
}
