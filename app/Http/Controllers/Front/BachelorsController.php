<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Bachelor;
use App\Models\BachelorIn;
use Illuminate\Http\Request;

class BachelorsController extends Controller
{
    public function bachelor()
    {
        $bachelors = Bachelor::all();

        return view('front.bachelor.list', compact(
            'bachelors',
        ));
    }

    public function list($id)
    {
        $bachelorins =  BachelorIn::where('bachelorcategory_id', $id)->orderBy('created_at', 'DESC')->get();
        return view('front.bachelor.list', compact(
            'bachelorins'
        ));
    }

    public function show($slug)
    {
        $bachelorin = BachelorIn::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        return view('front.bachelor.show', compact(
            'bachelorin',
        ));
    }


}