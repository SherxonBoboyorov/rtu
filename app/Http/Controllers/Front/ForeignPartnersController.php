<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Foreign;
use App\Models\ForeignPartner;
use Illuminate\Http\Request;

class ForeignPartnersController extends Controller
{
    public function foreignPartners()
    {
        $foreigns = Foreign::all();
        $foreignpartners = ForeignPartner::orderBy('created_at', 'DESC')->get();
        return view('front.foreignPartners', compact(
            'foreigns',
            'foreignpartners'
        ));
    }
}
