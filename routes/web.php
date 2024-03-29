<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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

// Route::view([url], [blade])
Route::view('about', 'about');
Route::view('contact', 'contact');

// Route::get("user","Users@index");
// Route::get('users/{user}',[Users::class,'loadView']);