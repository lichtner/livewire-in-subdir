<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

// this hack fix it, but this should work also with this

//Livewire::setUpdateRoute(static function ($handle) {
//    return Route::post('/shop/livewire/update', $handle)
//        ->middleware('api');
//});
//
//Livewire::setScriptRoute(static function ($handle) {
//    return Route::get('/shop/livewire/livewire.js', $handle)->name('get-route');
//});
