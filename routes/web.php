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
// トップページ
Route::get('/','PostController@index')->name('top');

// 投稿編集・削除
Route::resource('posts','PostController',['only'=>['create','edit','update','destroy']]);

// ログイン画面
Route::get('/login', function() {
    return view('login');
});

Auth::routes();

// ログイン後ホーム
Route::group(['middleware' => 'auth'], function() {
  // トップページ
Route::get('/','PostController@index')->name('top');
Route::get('/home', 'HomeController@index')->name('home');
});
// 投稿
Route::group(['middleware' => 'auth'], function() {
Route::get('/post', 'PostController@ShowCreateForm')->name('posts.create');
Route::post('/post', 'PostController@create');
Route::post('/post/{post}', 'PostController@index');
Route::get('/edit/{post}', 'PostController@edit')->name('posts.edit');
Route::get('/post/edit/{id}', 'PostController@update');
});
