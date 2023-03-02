<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tuition;
use Illuminate\Http\Request;

class TuitionFeesController extends Controller
{
    public function tuitionfees()
    {

        $tuitions = Tuition::all();
        return view('front.tuitionFees', compact('tuitions'));
    }
}
