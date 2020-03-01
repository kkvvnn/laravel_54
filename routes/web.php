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

Route::get('/user/{id?}', function($id = 1) {
    return 'User ' . $id;
})->name('user');

Route::get('/post/{post}/comment/{comment}', function($postId, $commentId) {
    return 'Post: ' . $postId . '<br>' . 'Comment: ' . $commentId;
});


Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});
