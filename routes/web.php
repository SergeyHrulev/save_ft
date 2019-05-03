<?php

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
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
Route::get('/articles/{slug}', 'PagesController@article')->name('article');
Route::get('/glossaries', 'PagesController@glossaries')->name('glossaries');
Route::get('/glossary/{slug}', 'PagesController@glossary')->name('glossary');
Route::get('/events', 'PagesController@events')->name('events');
Route::get('/event/{slug}', 'PagesController@event')->name('event');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');


Route::get('/quick-start', 'PagesController@quickStart')->name('quick-start');
Route::get('/chief-financial-officer', 'PagesController@cfo')->name('chief-financial-officer');
//Route::get('/financial-school', 'PagesController@financialSchool')->name('financial-school');
//Route::get('/business-security', 'PagesController@businessSecurity')->name('business-security');
//Route::get('/fast-start-upp', 'PagesController@fastStartUpp')->name('fast-start-upp');
//Route::get('/personal-banker', 'PagesController@personalBanker')->name('personal-banker');

Route::get('/test', 'GlossaryController@create');

/*
 * Orders and letters
 */
Route::post('/send-order', 'PagesController@sendOrder')->name('send-order');

Route::post('/subscribe', 'MailingController@subscribe')->name('subscribe');
Route::get('{id}/unsubscribe', function (Request $request, $id){
    if (!$request->hasValidSignature()){
        abort(401);
    }else{
        \App\Mailing::destroy($id);
        return redirect()->route('index')->with('successful_destroy', 'Вы успешно отменили подписку на нашу рассылку');
    }
})->name('unsubscribe');


/*
 * Return sitemap.xml
 */

Route::get('/sitemap.xml', 'SiteMapController@siteMap');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//Route::resource('/articles', 'ArticlesController');

Route::group(['middleware' => ['role:user'], 'prefix' => 'admin-dashboard'], function (){
    require base_path('routes/dashboard/admin.php');
});

