<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
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
    // Route::prefix('admin')->group(function () {

        Route::get('/user', 'index')->name('users')->middleware(CheckRole::class);
        Route::get('/user/create', 'create')->middleware(CheckRole::class);
        Route::post('/user/store', 'store')->middleware(CheckRole::class);
    // });
});


// Route::middleware(CheckRole::class)->group(function(){

// Route::controller(UserController::class)->group(function () {

//         Route::get('/user', 'index')->name('users');
//         Route::get('/user/create', 'create');
//         Route::post('/user/store', 'store');
 
// });

// });


Route::controller(DriverController::class)->group(function(){

Route::get('/drivers/create' , 'create')->name('drivers.create');
Route::post('/drivers/store' , 'store')->name('drivers.store');
Route::get('/drivers','index')->name('drivers.index');
Route::get('/driver/{id}','show')->name('driver.show');




// Route::get('/drivers/search','search')
//     ->name('drivers.search');

});