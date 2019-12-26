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



Route::get('halo', 'TestingController@hallo');

Route::get('halaman/{page2?}', function($page = null){
    return "ini adalah halmana page " .$page;
});

Route::get('halo/{nama?}', 'TestingController@hallo');

Route::get('contact', function(){
    return "in";
})->name('kepo');

Route::get('testing', function(){
    return redirect()->route('kepo');
});

Route::group(["prefix" => "produk"], function(){
    Route::get('all', 'ProdukController@all');
    Route::get('shirt', 'ProdukController@shirt');
    Route::get('latest', "ProdukController@latest");
    Route::get('popular', 'ProdukController@popular');
});

Route::view('kepo', 'kepo', ['produk' => 'hmm']);

Route::resource('supplier', 'SupplierController');

Route::view('template', 'template/master');

Route::view('profile', 'profile');

Route::view('about', 'about');

Route::view('bootstrap', 'template/bootstrap');