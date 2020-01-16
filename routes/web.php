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
    return view('welcome');
});

Route::get('homepage', function(){
    return view('pages.homepage');
});

Route::get('siswa', function(){
    $siswa =['Rasmus', 'Taylor', 'Brendan', 'John'];
    return view('siswa.index', compact('siswa'));
});
    
