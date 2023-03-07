<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\EveningEdication;
use App\Models\EveningEdicationCategory;
use Illuminate\Http\Request;

class EveningController extends Controller
{
    public function eveninglEducation()
    {
        $eveningedications = EveningEdication::all();
        $eveningedicationcategories = EveningEdicationCategory::with('eveningedicationins')->get();

        return view('front.extramuralEducation', compact(
            'eveningedications',
            'eveningedicationcategories'
        ));
    }
}
