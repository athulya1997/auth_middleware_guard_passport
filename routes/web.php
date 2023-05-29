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
Route::view("users","users");
Route::view("home","home");
Route::view("noaccess","noaccess");
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');
require __DIR__.'/adminauth.php';

// Route::group(['middleware'=>['auth','admin']],function(){
//     Route::get('admin',[\App\Http\Controllers\AuthController::class,'index']);
// });
Route::get('admin',[\App\Http\Controllers\AuthController::class,'index']);



// Route::get('/teacher',function(){
//     dd(auth()->user()->toArray());
// })->middlewarw(['auth','role:teacher']);

// Route::get('/student',function(){
//     dd(auth()->user()->toArray());
// })->middlewarw(['auth','role:student']);


