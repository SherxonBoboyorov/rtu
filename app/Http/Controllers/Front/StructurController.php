<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructurController extends Controller
{
    public function structure()
    {

        $structures = Structure::all();
        return view('front.structure', compact(
            'structures'
        ));
    }
}
