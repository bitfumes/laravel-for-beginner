<?php
// view
// get
// post
// patch or put
//  delete
Route::patch('/user', function () {
    return 'any request';
});

Route::get('about', function () {
    return view('about');
})->middleware(['auth', 'checkUser:sarthak@bitfumes.com']);

Route::get('contact', function () {
    return view('contact');
})->middleware(['auth', 'checkUser:bitfumes@gmail.com']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
