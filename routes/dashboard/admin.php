<?php

Route::get('/', 'Admin\AdminController@index');
Route::get('/users', 'Admin\AdminController@users');
Route::get('/roles', 'Admin\AdminController@roles');
Route::get('/articles', 'Admin\AdminController@articles');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/index', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles/delete', 'ArticlesController@destroy');
Route::get('/articles/edit/{id}', 'ArticlesController@edit');
Route::post('/articles/savephoto', 'Admin\ArticlePhotoController@savePhoto');
Route::post('/articles/savemodel', 'Admin\ArticlePhotoController@savePhotoModel');
Route::get('/chapters', 'Admin\AdminController@showChapters');
Route::get('/get-users-with-roles', 'Admin\AdminController@getUsersWithRoles');
Route::get('/get-roles-permissions', 'Admin\AdminController@getRolesPermissions');
Route::get('/get-roles-permissions', 'Admin\AdminController@getRolesPermissions');
Route::post('/set-permission', 'Admin\AdminController@setPermission');
Route::post('/set-role', 'Admin\AdminController@setRole');

Route::any('/set-article-img', 'ArticlesController@setArticleImg');
Route::get('/get-article-img', 'ArticlesController@getArticleImg');
Route::any('/test', 'ArticlesController@test');
Route::get('/test-test', 'ArticlesController@testServise');


