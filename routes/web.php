<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify'=>true]);

    Route::middleware('verified')->group(function(){
        Route::get('/home',[HomeController::class, 'index'])->name('home');
    });



Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){
    Route::get('list',[adminController::class,'index'])->name('admin');
    Route::get('delete/{id}',[adminController::class,'delete']);
    Route::get('edit/{id}',[adminController::class,'showData']);
});

    Route::post('edit',[adminController::class,'update']);