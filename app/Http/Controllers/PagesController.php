<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*
     *
     */
    public function index(){
        return view('pages.index');
    }

    public function articles(Articles $articles){
        $articles = Articles::sortDesc()->published()->get();
        //dd($articles);
        return view('pages.blog', [
            'articles' => $articles,
        ]);
    }

    public function article($slug){
        $article = Articles::where('slug', $slug)->get();

        //$article->toJson();

        return view('pages.article', [
            'article' => $article,
        ]);
    }

}
