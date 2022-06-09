<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\belajarweb;
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

Route::get('halo', function () {
    return 'hai Nandaaa';
});

Route::get('datang', function () {
    return view('datang');
});

Route::get('nav', function () {
    return view('nav');
});

Route::get('about', function () {
    return view('about',['title'=>'About']);
});

Route::get('praktikum', function () {
    return view('praktikum',['title'=>'Praktikum']);
});

Route::get('tugas', function () {
    return view('tugas',['title'=>'Tugas']);
});

Route::get('home', function () {
    return view('home',['title'=>'Home']);
});
Route::get('dosen', [DosenController::class, 'index']);

Route::get('web', [belajarweb::class, 'index']);