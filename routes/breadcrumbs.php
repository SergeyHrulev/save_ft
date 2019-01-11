<?php

Breadcrumbs::for('home', function ($trail){
    $trail->push('Главная', route('index'));
});
Breadcrumbs::for('articles', function ($trail){
    $trail->parent('home');
    $trail->push('Статьи', route('articles'));
});
