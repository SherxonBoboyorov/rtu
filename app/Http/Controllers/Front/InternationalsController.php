<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\International;
use Illuminate\Http\Request;

class InternationalsController extends Controller
{
    public function international()
    {
        $internationals = International::all();
        return view('front.international', compact('internationals'));
    }
}
