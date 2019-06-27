<?php
use Illuminate\Http\Request;

Route::get('/route',function(){
    return view('route');
});

Route::patch('/handle-route',function(Request $request){
    return $request->all();
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
