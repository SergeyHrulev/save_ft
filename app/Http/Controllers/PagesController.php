<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Chapter;
use App\Events;
use App\Glossary;
use http\Url;
use Illuminate\Http\Request;
use Lionix\SeoManager\Facades\SeoManager;

class PagesController extends Controller
{
    /*
     *
     */
    public function index(){
        $articles = Articles::paginate(4);
        return view('pages.index', [
            'articles' => $articles,
        ]);
    }

    public function articles(Articles $articles){
        $articles = Articles::sortDesc()->published()->paginate(5);

        return view('pages.blog', [
            'articles' => $articles,
        ]);
    }

    public function article($slug){
        $article = Articles::where('slug', $slug)->get();
        $articles = Articles::paginate(15);
        return view('pages.article', [
            'article' => $article,
            'articles' => $articles,
        ]);
    }

    public function glossaries(){
        $chapters = Chapter::with('glossary')->orderBy('created_at', 'DESC')->get();
        return view('pages.dictionary', ['chapters' => $chapters]);
    }

    public function glossary($slug){
        $chapters = Chapter::with('glossary')->orderBy('created_at', 'DESC')->get();
        $glossary = Glossary::where('slug', $slug)->get();
        $category = Glossary::where('chapter_id', $glossary[0]->chapter_id)->get(['slug', 'title']);
        //dd($category);
        return view('pages.dictionary', ['chapters' => $chapters, 'dictionary' => $glossary, 'category' => $category]);
    }

    public function events(){
        $events = Events::sortDesc()->published()->paginate(15);
        return view('pages.events', ['events' => $events]);
    }

    public function event($slug){
        $events = Events::sortDesc()->published()->get();
        $event = Events::where('slug', $slug)->sortDesc()->published()->get();
        return view('pages.event', ['event' => $event, 'events' => $events]);
    }

    public function contacts(){
        return view('pages.contacts');
    }
}
