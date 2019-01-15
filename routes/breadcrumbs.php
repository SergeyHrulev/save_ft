<?php

Breadcrumbs::for('home', function ($trail){
    $trail->push('Главная', route('index'));
});
Breadcrumbs::for('articles', function ($trail){
    $trail->parent('home');
    $trail->push('Статьи', route('articles'));
});
Breadcrumbs::for('article', function ($trail, $article){
    $trail->parent('articles');
    $trail->push($article[0]->title, route('article', $article[0]));
});
