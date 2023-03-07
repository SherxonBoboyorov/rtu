<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\MasterCategory;
use App\Models\MasterIn;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function master()
    {
        $masters = Master::all();
        $mastercategories = MasterCategory::with('masterins')->get();

        return view('front.master.list', compact(
            'masters',
            'mastercategories'
        ));
    }

    public function show($id)
    {
        $masterin = MasterIn::find($id);
        return view('front.master_show', compact(
            'masterin'
        ));
    }
}
