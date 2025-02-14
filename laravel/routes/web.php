<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;


Route::get('/', function () {
    return view ('welcome');
});

Route::get('/greet', function () {
    return ('Hello, Laravel!');
});


Route::get('/greetings', [GreetController::class, 'greetPage']);