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

Route::get('/','WelcomeController@index');

Auth::routes();

// Mypage TOP画面
Route::get('/mypage', 'Mypage\HomeController@index');

// 会員情報 トップ画面
Route::any('/mypage/myinfo', 'Mypage\InfoChangeController@index');
// 会員情報 編集画面
Route::any('/mypage/myinfo/edit', 'Mypage\InfoChangeController@edit');
// 会員情報 編集確認画面
Route::any('/mypage/myinfo/edit/check', 'Mypage\InfoChangeController@check');
// 会員情報 編集完了画面
Route::any('/mypage/myinfo/edit/done', 'Mypage\InfoChangeController@done');

// ホスト会員情報 トップ画面
Route::any('/mypage/myhostinfo', 'Mypage\HostInfoChangeController@index');
// 会員情報 編集画面
Route::any('/mypage/myinfo/edit', 'Mypage\InfoChangeController@edit');
// 会員情報 編集確認画面
// Route::any('/mypage/myinfo/edit/check', 'Mypage\InfoChangeController@check');
// 会員情報 編集完了画面
// Route::any('/mypage/myinfo/edit/done', 'Mypage\InfoChangeController@done');

// ホストになる TOP画面
Route::any('/mypage/behost', 'Mypage\BeHostController@index');
// ホストになる 確認画面
Route::any('/mypage/behost/check', 'Mypage\BeHostController@check');
// ホストになる 完了画面
Route::any('/mypage/behost/check/done', 'Mypage\BeHostController@done');