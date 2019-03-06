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
Breadcrumbs::for('events', function ($trail){
    $trail->parent('home');
    $trail->push('Мероприятия', route('events'));
});
Breadcrumbs::for('event', function ($trail, $event){
    $trail->parent('events');
    $trail->push($event[0]->title, route('event', $event[0]));
});
Breadcrumbs::for('glossaries', function ($trail){
    $trail->parent('home');
    $trail->push('Финсловарь', route('glossaries'));
});
Breadcrumbs::for('glossary', function ($trail, $glossary){
    $trail->parent('glossaries');
    $trail->push($glossary->title, route('glossary', $glossary));
});
