<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return redirect('/tasks');
});

//Simple Routing
Route::get('/greet', function () {
    return ('Hello, Laravel!');
});

Route::get('/greetings', [GreetController::class, 'greetPage']);

//Migration and Models Activity
Route::resource('tasks', TaskController::class);

//Blade Templating Activity
//Displaying Variables
Route::get('/greeting', function () {
    $name = '<script>alert("Hacked!")</script>'; // Simulating a malicious input
    return view('greet', compact('name'));
});

Route::get('/content', function () {
    $content = '<strong>Bold Text</strong>';
    return view('content', compact('content'));
});

//Loop and Controls
//@if
Route::get('/discount', function () {
    return view('discount', ['isEligible' => true]);
});

//@elseif
Route::get('/membership', function () {
    return view('membership', ['membership' => 'gold']);
});

//@for
Route::get('/numbers', function () {
    return view('numbers');
});

//@foreach
Route::get('/users', function () {
    $users = [
        ['name' => 'Alice'],
        ['name' => 'Bob'],
        ['name' => 'Charlie']
    ];
    return view('users', compact('users'));
});

