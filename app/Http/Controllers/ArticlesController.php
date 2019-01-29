<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Alexusmai\Ruslug\Slug;
use function PHPSTORM_META\elementType;

class ArticlesController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('role:user');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        return $articles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$article = new Articles;
        //$article->published = 0;
        //$article->save();
        //return view('dashboard.pages.article_edit', ['article' => $article->id]);
        return view('dashboard.pages.article_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Slug $slug)
    {
        $this->middleware('role:user');
        $article = Articles::findOrFail($request->id);
        $article->meta_title = $request->meta_title;
        $article->meta_description = $request->meta_description;
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->text = $request->text;
        $article->published = $request->published;
        $article->slug = $slug->make($request->title);
        $article->save();
        return redirect('/admin-dashboard/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        return view('dashboard.pages.article_edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles, Request $request)
    {

        if (Articles::destroy($request->id)){
            return 'Статья успешно удалена';
        }else{
            return 'произошла ошибка';
        }
    }
}
