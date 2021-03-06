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

Route::domain('sitcon.iosclub.tw')->group(function () {
    Route::get('/', function () {
        return view('sitcon');
    })->name('sitcon');
});
Route::domain('iosclub.tw')->group(function () {
Route::get('/', function () {
    return view('home')->with(['title'=>'iosclub']);
})->name('home');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('exam',function(){
    return Redirect::to('https://docs.google.com/document/d/1QUeiozE6MYDrSKjNcBA8ty0Q8R5KEOax6bhEMrQbLIE/edit?usp=sharing');
});
Route::get('rule',function(){
    return Redirect::to('https://docs.google.com/document/d/1jlszEJgLFNTw8dwNi_oapv_kzzQtfWShGmkzJfVciks/edit');
});
});
