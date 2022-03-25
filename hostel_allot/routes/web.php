<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hostel_auth_controller;

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

Route::get('/login', [hostel_auth_controller::class,'login']);
Route::get('/signup', [hostel_auth_controller::class,'signup']);
