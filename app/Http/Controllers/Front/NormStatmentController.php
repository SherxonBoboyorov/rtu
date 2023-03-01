<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Norm;
use Illuminate\Http\Request;

class NormStatmentController extends Controller
{
    public function list()
    {
        $norms = Norm::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.normsstatment.list', compact('norms'));
    }

    public function show($slug)
    {
        $norm = Norm::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        return view('front.normsstatment.show', compact(
            'norm',
        ));
    }
}
