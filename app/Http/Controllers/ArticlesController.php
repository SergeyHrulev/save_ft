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
        $article = new Articles;
        $article->published = 0;
        $article->save();
        session(['article_id' => $article->id]);
        return view('dashboard.pages.article_edit');
    }

    public function setArticleImg(Request $request){
        $articleImg = Articles::find(3);
        //$img = 'https://www.millionaireacts.com/wp-content/uploads/2018/01/Before-Opening-Business-to-Public-1.jpg';
        //$img = $request->file('file');
        //dd($img);
        $media = $articleImg->addMediaFromRequest('photo')->toMediaCollection('article-text-photo');

        dd($media->getUrl());

    }

    public function getArticleImg(){
        $article = Articles::find(3);
        $articleImg = $article->getFirstMedia('article-text-photo');
//        $url = $articleImg[0]->getUrl();
//        $fullUrl = $articleImg[0]->getFullUrl();
//        $path = $articleImg[0]->getPath();
        dd($articleImg);
    }

    public function test(Request $request){
       $data = Articles::find(25);
       $media = $data->getMedia('article-text-photo');
       foreach ($media as $item){
           echo $item->getUrl('thumb') . '<br>';
       }
       dd($media);

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
        $article = Articles::findOrFail(session()->get('article_id'));
        $article->meta_title = $request->meta_title;
        $article->meta_description = $request->meta_description;
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->text = $request->text;
        $article->img = $request->img;
        $article->preview = $request->preview;
        $article->alt = $request->alt;
        $article->img_title = $request->img_title;
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
