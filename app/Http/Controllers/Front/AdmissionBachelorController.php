<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\AdmissionIn;
use Illuminate\Http\Request;

class AdmissionBachelorController extends Controller
{
    public function admissionBachelor($id)
    {
        $admissions = Admission::all();
        $admissionins = AdmissionIn::where('admissioncategory_id', $id)->orderBy('created_at', 'DESC')->get();

        return view('front.admissionsBachelor', compact(
            'admissions',
            'admissionins',
            'id'
        ));
    }
}
