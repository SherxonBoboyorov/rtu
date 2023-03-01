<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function leadership()
    {
        $leaderships = Leadership::orderBy('created_at', 'DESC')->get();
        return view('front.leadership', compact('leaderships'));
    }
}
