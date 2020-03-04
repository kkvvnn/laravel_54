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
})->name('welcome');

Route::get('/user/{id?}', 'UserController@show')->name('user');
Route::get('/users', 'UserController@users')->name('users');

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

Route::get('input/form', function() {
    return view('input_form');
});

Route::get('input/result', 'TestInputController');

Route::get('resp_eloquent', function(\App\User $user) {
    return $user;
});

Route::get('/response', function() {
    return response('Hello Response', 200)
        ->header('Content-Type', 'text/plain')
        ->cookie('name2', 'value');
});

Route::get('/back', function() {
    return back();
//    return redirect()->route('user', [$user]);
});

Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');