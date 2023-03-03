<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\MasterIn;
use Illuminate\Http\Request;

class MastersController extends Controller
{
     public function master()
    {
        $masters = Master::all();

        return view('front.master.list', compact(
            'masters',
        ));
    }

    public function list($id)
    {
        $masterins =  MasterIn::where('mastercategory_id', $id)->orderBy('created_at', 'DESC')->get();
        return view('front.master.list', compact(
            'masterins'
        ));
    }

    public function master_in($id)
    {
        $masterin = MasterIn::find($id);

        return view('front.master_show', compact(
            'masterin',
        ));
    }
}
