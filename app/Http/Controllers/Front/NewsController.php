<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function list()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(12);
        $news = Article::select(DB::raw('YEAR(created_at) as year'))->distinct()->pluck('year')->toArray();

        return view('front.news.list', compact(
            'articles',
            'news'
     ));
    }

    public function ajaxFilterList(Request $request){
        $dates = $request->dates;
        $news =  Article::orderBy('created_at', 'DESC');

        if(isset($dates)&&!empty($dates)){
            $news = $news->whereYear('created_at',$dates);
        }
        $news = $news->paginate(6);

        return response(view('front.news.filter_result',['news'=>$news]));
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
