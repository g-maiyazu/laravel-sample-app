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
// また、prefixで指定すると、「ユーザー認証⇒各ページに遷移」の流れになる
// フォーム画面では基本的にGET,POSTで指定すればいい(put/patch,deleteもある)
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
  Route::get('index', 'ContactFormController@index')->name('contact.index');
  Route::get('create', 'ContactFormController@create')->name('contact.create');
  Route::post('store', 'ContactFormController@store')->name('contact.store');
  Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
  Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
  Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');
  Route::post('destroy/{id}', 'ContactFormController@destroy')->name('contact.destroy');
});

// Route::resource('contacts', 'ContactFormController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
