<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bachelor;
use App\Models\BachelorCategory;
use App\Models\BachelorIn;
use Illuminate\Http\Request;

class BachelorsController extends Controller
{
    public function bachelor()
    {
        $bachelors = Bachelor::all();
        $bachalorcategories = BachelorCategory::with('bachelorins')->get();

        return view('front.bachelor.list', compact(
            'bachelors',
            'bachalorcategories'
        ));
    }

    public function show($id)
    {
        $bachelorin = BachelorIn::find($id);
        return view('front.bachelor_show', compact(
            'bachelorin'
        ));
    }

}
