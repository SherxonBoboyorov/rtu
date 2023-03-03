<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function careers()
    {
        $careers = Career::all();
        return view('front.careers', compact(
            'careers'
        ));
    }
}
