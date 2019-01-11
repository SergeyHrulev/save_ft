<?php

Route::get('/', 'Admin\AdminController@index');
Route::get('/get-users-with-roles', 'Admin\AdminController@getUsersWithRoles');
Route::get('/get-roles-permissions', 'Admin\AdminController@getRolesPermissions');
Route::get('/get-roles-permissions', 'Admin\AdminController@getRolesPermissions');
Route::post('/set-permission', 'Admin\AdminController@setPermission');
Route::post('/set-role', 'Admin\AdminController@setRole');
//Route::post('/set-role', 'ArticlesController@store');
