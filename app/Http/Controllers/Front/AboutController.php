<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Statistic;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {

        $pages = Page::orderBy('created_at', 'DESC')->get();
        $statistics = Statistic::orderBy('created_at', 'DESC')->get();
        return view('front.about', compact(
            'pages',
            'statistics'
        ));
    }
}
