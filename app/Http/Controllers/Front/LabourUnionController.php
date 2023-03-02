<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Labour;
use Illuminate\Http\Request;

class LabourUnionController extends Controller
{
    public function labourUnion()
    {
        $labours = Labour::all();
        return view('front.labourUnion', compact('labours'));
    }
}
