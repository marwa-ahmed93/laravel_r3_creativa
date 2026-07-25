<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    //echo "welcome";
});

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::post('/greeting', function () {
    return 'Hello World';
});
Route::match(['get', 'post'], '/', function () {
    // ...
});

Route::redirect('/here', '/greeting');


Route::view('/welcome', 'hello');


// Route::get('/user/{name?}', function (?string $name = null){
//     return 'User '.$name;
// });

Route::controller(UserController::class)->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/user', 'index')->name('users');
        Route::get('/user/create', 'create');
        Route::post('/user/store', 'store');
    });
});
