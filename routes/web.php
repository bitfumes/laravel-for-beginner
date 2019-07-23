<?php
use Illuminate\Http\Request;

Route::get('/person/{name}', function ($name) {
    return $name;
})->name('person');

Route::get('/mobile', function () {
    return redirect()->route('person', ['name'=>'bitfumes']);
});

Route::patch('/handle-anything', function (Request $request) {
    return $request->all();
})->name('handleRoute');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
