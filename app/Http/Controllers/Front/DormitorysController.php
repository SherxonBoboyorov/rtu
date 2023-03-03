<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Dormitory;
use Illuminate\Http\Request;

class DormitorysController extends Controller
{
    public function dormitory()
    {
        $dormitories = Dormitory::all();
        return view('front.dormitory', compact(
            'dormitories'
        ));
    }
}
