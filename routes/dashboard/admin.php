<?php

Route::get('/', 'Admin\AdminController@index');
Route::get('/users', 'Admin\AdminController@users');
Route::get('/roles', 'Admin\AdminController@roles');
Route::get('/articles', 'Admin\AdminController@articles');
Route::get('/get-users-with-roles', 'Admin\AdminController@getUsersWithRoles');
Route::get('/get-roles-permissions', 'Admin\AdminController@getRolesPermissions');
Route::get('/get-roles-permissions', 'Admin\AdminController@getRolesPermissions');
Route::post('/set-permission', 'Admin\AdminController@setPermission');
Route::post('/set-role', 'Admin\AdminController@setRole');
//Route::post('/set-role', 'ArticlesController@store');
