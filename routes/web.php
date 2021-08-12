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
    return view('welcome');
});

Route::middleware(['auth','verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/user', function () {
    return 'Cuman bisa diakses oleh role user';
})->middleware('role:user');

Route::get('/admin', function () {
    return 'Cuman bisa diakses oleh role admin';
})->middleware('role:admin');

Route::get('/read-user', function () {
    return 'Cuman bisa diakses kalau punya permission read-user';
})->middleware('permission:read-user');

