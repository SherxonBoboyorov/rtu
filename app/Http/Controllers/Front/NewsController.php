<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function list(Request $request)
    {
        $articles = Article::select(DB::raw('*, MONTH(created_at) as month'))->orderBy('created_at', 'DESC');
        if($request->month){
            $articles = $articles->whereMonth('created_at', $request->month);
        }
        $articles = $articles->paginate(12);
        $years = Article::select(DB::raw('YEAR(created_at) as year'))->distinct()->pluck('year')->toArray();

        return view('front.news.list', compact(
            'articles',
            'years'
     ));
    }


    public function show($slug)
    {
        $article = Article::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        $article->views += 1;
        $article->save();

        $articles_list_alls = Article::orderBy('created_at', 'DESC')->paginate(4);

        return view('front.news.show', compact(
            'article',
            'articles_list_alls',
        ));
    }
}
