<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LougoutController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/create',function(){
    return view('create');
    });

    Route::get('',[PostController::class,'index'])->name('home');
    Route::get('/logout',[LougoutController::class,'store'])->name('logout');


    Route::get('/post',[PostController::class,'store']);
    Route::post('/post',[PostController::class,'store']);
    Route::delete('/delete/{id}',[PostController::class,'destroy']);
    Route::get('/edit/{id}',[PostController::class,'edit']);

    Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
    Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);



// Route::get('/',[PostController::class,'index']);

// Route::get('/create',function(){
// return view('create');
// });

// Route::post('/post',[PostController::class,'store']);
// Route::delete('/delete/{id}',[PostController::class,'destroy']);
// Route::get('/edit/{id}',[PostController::class,'edit']);

// Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
// Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);

// Route::put('/update/{id}',[PostController::class,'update']);

Route::get('/home',[HomeController::class,'index'])->name('home');

