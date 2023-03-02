<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partners()
    {
        $partners = Partner::orderBy('created_at', 'DESC')->get();
        return view('front.partners', compact('partners'));
    }
}
