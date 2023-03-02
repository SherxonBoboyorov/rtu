<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipsController extends Controller
{
    public function scholarships()
    {
        $scholarships = Scholarship::all();
        return view('front.scholarships', compact('scholarships'));
    }
}
