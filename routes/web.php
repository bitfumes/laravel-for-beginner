<?php
//  What is Facade
//  Why we need Facade
//  How to implement our own Facade

class Fish{
    public function swim()
    {
        return 'swimming';
    }
    public function eat()
    {
        return 'eating';
    }
}
app()->bind('fish',function(){
    return new Fish;
});

class Bike{
    public function start()
    {
        return 'starting';
    }
}

app()->bind('bike',function(){
    return new Bike;
});

class Facade {
    public static function __callStatic($name,$args)
    {
        return app()->make(static::getFacadeAccessor())->$name();
    }

    protected static function getFacadeAccessor()
    {
        // # code...
    }
}

class FishFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'fish';
    }   
}

class BikeFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'bike';
    }
}

dd(BikeFacade::start());















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
