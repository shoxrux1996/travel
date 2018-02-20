<?php
use TCG\Voyager\Models\Post;
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

Route::get('home', function () {
    return view('welcome');
});
Route::get('/image', function()
{

    $img =  \Intervention\Image\Facades\Image::make('https://s.tmimgcdn.com/scr/61100/winter-tour-tour--travel-agency-website-template_61187-original.jpg?width=400&height=400')->resize(1000, 556);

    return $img->response('jpg');
});

Route::post('comment/{id}','CommentController@comment')->name('comment');
Route::post('test', '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@remove')->name('test');
Route::get('tour/{slug}','TourController@show')->name('tour.show');
Route::get('test/{locale}', function ($locale){
   $destination = \App\Destination::find(5);
       echo $destination->getTranslatedAttribute('text',$locale);
});
Route::get('post/{slug}', function($slug){
    $post = Post::where('slug', '=', $slug)->firstOrFail();
    return view('post.post', compact('post'));
});

Route::get('about', 'AboutController@index')->name('about');
Route::post('send', 'AboutController@send')->name('message');
Route::get('result-list', 'TourController@result_list')->name('tour.list');
Route::get('faqs','FaqController@faqs')->name('faqs');
Route::get('contact','ContactController@contact')->name('contact');
Route::get('blog','BlogController@index')->name('blog.list');
Route::get('blog/{slug}', 'BlogController@show')->name('blog.show');
Route::post('note/{id}','BlogController@commentSubmit')->name('note');
Route::get('book/{id}', 'TourController@payment')->name('payment');
Route::post('book/submit/{id}','TourController@book')->name('book');
Route::get('book/complete/{id}', 'TourController@complete')->name('confirmed');
// Auth::routes();

 Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('setlocale/{locale}', 'LanguageController@setLocale')->name('lang.switch');
