<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Council;
use Illuminate\Http\Request;

class AcademicCouncilController extends Controller
{
    public function academicCouncil()
    {
        $councils = Council::orderBy('created_at', 'DESC')->get();
        return view('front.academicCouncil', compact('councils'));
    }

}
