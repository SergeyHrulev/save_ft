<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Glossary;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\SitemapGenerator;

class SiteMapController extends Controller
{
    public function siteMap(){

        $sitemap = Sitemap::create()
            ->add(Url::create('/')
            ->setLastModificationDate(Carbon::today())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.9))
            ->add(Url::create('/articles')
                ->setLastModificationDate(Carbon::today())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));

        Articles::all()->each(function (Articles $articles)use($sitemap){
            $sitemap->add(Url::create('/articles/' . $articles->slug));
            });
        Glossary::all()->each(function (Glossary $glossary) use ($sitemap){
            $sitemap->add(Url::create('/glossary/' . $glossary->slug));
        });

        $sitemap->writeToFile( 'sitemap.xml');
    }
}
