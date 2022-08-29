<?php

use Illuminate\Support\Facades\Route;

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
    
    return view('home');

})->name('home');

Route::get('/products', function () {

    $comics_array = config('comics');

    $data = [
        'comics' => $comics_array
    ];
    
    return view('products', $data);

})->name('products');

Route::get('/product/{id}', function ($id) {
    $comics_array = config('comics');
    $current_comic = [];

    foreach($comics_array as $comic) {
       if($comic['id'] == $id) {
           $current_comic = $comic;

       }
    }

    // Se id non trovato
    // if(empty($current_comic)) {
    //     abort('404');
    // }

    $data = [
        'current_comic' => $current_comic
    ];
    
    return view('single-comic', $data);
})->name('single-comic');