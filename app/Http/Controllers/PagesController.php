<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Events;
use Illuminate\Http\Request;
use Lionix\SeoManager\Facades\SeoManager;

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

    public function glossary(){
        return view('pages.dictionary');
    }

    public function events(){
        return view('pages.events');
    }

    public function event($slug){
        $event = Events::sortDesc()->published()->get();
        dd($event);
        return view('pages.info');
    }

    public function contacts(){
        return view('pages.contacts');
    }
}
