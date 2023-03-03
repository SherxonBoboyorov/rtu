<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BachelorIn;
use Illuminate\Http\Request;

class BachelorShowController extends Controller
{
    public function bachelor_in($id)
    {
        $bachelorin = BachelorIn::find($id);

        return view('front.bachelor_show', compact(
            'bachelorin',
        ));
    }
}
