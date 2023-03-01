<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamInController extends Controller
{
    public function team($slug)
    {
        $team = Team::where('slug_uz', $slug)
        ->orWhere('slug_ru', $slug)
        ->orWhere('slug_en', $slug)
        ->first();
        return view('front.teamin', compact(
            'team'
        ));
    }
}
