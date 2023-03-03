<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Article;
use App\Models\OurPartner;
use App\Models\Slider;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $pages = Page::orderBy('created_at', 'DESC')->get();
        $advantages = Advantage::all();
        $articles = Article::orderBy('created_at', 'DESC')->paginate(3);
        $ourpartners = OurPartner::orderBy('created_at', 'DESC')->get();
        return view('front.index', compact(
            'sliders',
            'pages',
            'advantages',
            'articles',
            'ourpartners'
        ));
    }
}
