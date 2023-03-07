<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Edication;
use App\Models\EdicationCategory;
use Illuminate\Http\Request;

class ExtramuralController extends Controller
{
    public function extramuralEducation()
    {
        $edications = Edication::all();
        $edicationcategories = EdicationCategory::with('edicationins')->get();

        return view('front.extramuralEducation', compact(
            'edications',
            'edicationcategories'
        ));
    }
}
