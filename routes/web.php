<?php


























Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->middleware(['auth', 'checkUser:sarthak@bitfumes.com']);

Route::get('contact', function () {
    return view('contact');
})->middleware(['auth', 'checkUser:bitfumes@gmail.com']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
