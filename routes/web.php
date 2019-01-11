<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('index');
Route::get('/articles', 'PagesController@articles')->name('articles');
Route::get('/articles/{slug}', 'PagesController@article')->name('article/{slug}');


Route::get('/loan-expert', 'PagesController@loanExpert')->name('loan-expert');
Route::get('/chief-financial-officer', 'PagesController@chiefFinancialOfficer')->name('chief-financial-officer');
Route::get('/financial-school', 'PagesController@financialSchool')->name('financial-school');
Route::get('/business-security', 'PagesController@businessSecurity')->name('business-security');
Route::get('/fast-start-upp', 'PagesController@fastStartUpp')->name('fast-start-upp');
Route::get('/personal-banker', 'PagesController@personalBanker')->name('personal-banker');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//Route::resource('/articles', 'ArticlesController');

Route::group(['middleware' => ['role:user'], 'prefix' => 'admin-dashboard'], function (){
    require base_path('routes/dashboard/admin.php');
});
