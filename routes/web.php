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

Route::get('/user/{id?}', 'UserController@show')->name('user');

Route::get('/post/{post}/comment/{comment}', function($postId, $commentId) {
    return 'Post: ' . $postId . '<br>' . 'Comment: ' . $commentId;
});


Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});

Route::get('/age/{age?}', function($age = 30) {
    return 'Ваш возраст: ' . $age;
})->middleware('checkage');

Route::get('not18', function() {
    return '<h1>Доступ закрыт. Вам нет 18-ти</h1>';
})->name('not18');