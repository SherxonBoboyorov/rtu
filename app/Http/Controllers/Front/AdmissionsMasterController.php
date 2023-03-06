<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AdmissionMaster;
use App\Models\AdmissionMasterCategory;
use App\Models\AdmissionMasterIn;
use Illuminate\Http\Request;

class AdmissionsMasterController extends Controller
{
    public function admissionMaster()
    {
        $admissionmasters = AdmissionMaster::all();
        $admissionmastercategories = AdmissionMasterCategory::with('admissionmasterins')->get();

        return view('front.admissionsMaster', compact(
            'admissionmasters',
            'admissionmastercategories'
        ));
    }
}
