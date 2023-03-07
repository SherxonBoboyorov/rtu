<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\AdmissionCategory;
use Illuminate\Http\Request;

class AdmissionBachelorController extends Controller
{
    public function admissionBachelor()
    {
        $admissions = Admission::all();
        $admissioncategories = AdmissionCategory::with('admissionins')->get();

        return view('front.admissionsBachelor', compact(
            'admissions',
            'admissioncategories',
        ));
    }
}
