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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/test', 'TestController@index');

//Route::get('contact/index', 'ContactFormController@index');

// グループ化することで、上記ルーティングの「contact/」という部分をprefixで指定して省略できる
// また、ユーザー認証できたら、各ページに飛ぶ流れになる
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
  Route::get('index', 'ContactFormController@index')->name('contact.index');
  Route::get('create', 'ContactFormController@create')->name('contact.create');
  Route::post('store', 'ContactFormController@store')->name('contact.store');
  Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
});

// Route::resource('contacts', 'ContactFormController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
