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

//ユーザー登録
//->name()はルーティングをFormやlink_to_route()に使用するため、ルーティングに名前を付けている。
Route::get("signup", "Auth\RegisterController@showRegistrationForm")->name("signup.get");
Route::post("signup", "Auth\RegisterController@register")->name("signup.post");


//ログイン認証
Route::get("login", "Auth\LoginController@showLoginForm")->name("login");
Route::post("login", "Auth\LoginController@login")->name("login.post");
Route::get("logout", "Auth\LoginController@logout")->name("logout.get");


//ユーザー機能
Route::group(["middleware" => ["auth"]], function () {
    Route::get("index/{id}", "UsersController@index")->name("index");
    Route::get("edit", "UsersController@showEditForm")->name("edit");
    Route::post("edit", "UsersController@edit")->name("edit.post");
    
    //プロフィール写真保存
    Route::post("fileUpload", "UsersController@fileUpload")->name("fileUpload");
    
    //投稿機能
    Route::post("filePost", "UsersController@filePost")->name("filePost");
    
    //魚の写真アップロード
    Route::post("records/{id}", "UsersController@fishPicture")->name("fishPicture");
    
    //投稿内容表示
    Route::get("fileIndex", "UsersController@fileIndex")->name("fileIndex");
    
    //投稿削除
    Route::delete("records/{id}", "UsersController@destroy")->name("destroy");
});


//登録情報削除
Route::delete("delete", "UsersController@delete")->name("delete");
