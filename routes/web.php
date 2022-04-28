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
Route::resource('products', 'App\Http\Controllers\ProductController');//->middleware('auth');

/*
Route::delete('products/{id}', 'App\Http\Controllers\Products@destroy')->name('products.destroy');
Route::put('products/{id}', 'App\Http\Controllers\Products@update')->name('products.update');
Route::get('products/{id}/edit', 'App\Http\Controllers\Products@edit')->name('products.edit');
Route::get('products', 'App\Http\Controllers\Products@index')->name('products.index');
Route::get('products/create', 'App\Http\Controllers\Products@create')->name('products.create');
Route::get('products/{id}', 'App\Http\Controllers\Products@show')->name('products.show');
Route::post('products', 'App\Http\Controllers\Products@store')->name('products.store');
*/

Route::get('/login', function (){
    return 'login';
})->name("login");

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', function(){
            return 'Home Admin';
        })->middleware('auth');
    });
});



Route::get('/categorias/{flag}', function($prm1){
    return "Produtos da categoria: {$prm1}";
});

Route::any('/any', function(){
    return 'Any';
});

Route::match(['get','post'], '/match', function (){
    return 'match';
});

Route::get('/', function () {
    return view('welcome');
});
