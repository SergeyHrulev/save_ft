<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Chapter;
use App\Events;
use App\Glossary;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\Review;
use Illuminate\Http\Request;
use Lionix\SeoManager\Facades\SeoManager;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /*
     *
     */
    public function index(){
        $articles = Articles::paginate(4);
        $events = Events::paginate(4);
        $reviews = Review::paginate(3);
        return view('pages.index', [
            'articles' => $articles,
            'events' => $events,
            'reviews' => $reviews,
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
        //dd($glossary);
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

    public function sendOrder(Request $request){

        if (Order::create($request->all())){
            return redirect()->back()->with('orderSuccess', 'Ваша заявка отправлена, мы свяжемся с вами в ближайшее время');
        }else{
            return redirect()->back()->with('orderSuccess', 'Произошла ошибка, попробуйте еще раз');
        }
    }

    public function cfo(){
        return view('pages.servises.cfo');
    }
    public function quickStart(){
        return view('pages.servises.quickStart');
    }
}
