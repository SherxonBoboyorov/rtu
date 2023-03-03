<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Research;
use App\Models\ResearchStatistic;
use Illuminate\Http\Request;

class ResearchsController extends Controller
{
    public function research()
    {
        $researchs = Research::all();
        $researchstatistics = ResearchStatistic::orderBy('created_at', 'DESC')->get();
        return view('front.research', compact(
            'researchs',
            'researchstatistics'
        ));
    }
}
