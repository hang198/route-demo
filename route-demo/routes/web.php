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

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "<h2>This is home page</h2>";
});
Route::get('/about', function () {
    echo "<h2>This is about page</h2>";
});
Route::get('/contact', function () {
    echo "<h2>This is contact page</h2>";
});
Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});
Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});
Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});
Route::get('/hang','HomeController@index');
