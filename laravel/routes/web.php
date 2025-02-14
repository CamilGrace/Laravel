<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/greet', function () {
    return ('Hello, Laravel!');
});

Route::get('/greetings', [GreetController::class, 'greetPage']);

Route::resource('tasks', TaskController::class);
