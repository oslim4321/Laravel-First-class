<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['name' => 'selim']);
})->name('index');

Route::get('/about/{name?}/{age?}', 'userController@about')->name('about');


// Route::get('/about/{name?}/{age?}',function($name, $age){
//     return view('about', ['name'=> $name, 'age'=> $age]);
// })->name('about');


Route::get('piza', function () {
    $pizza = [
        'name' => 'selim',
        'base' => 'cheese crust',
        'price' => 10
    ];
    return view('piza', $pizza);
})->name('piza');

/* composer upgrade to upgrade laravel version */