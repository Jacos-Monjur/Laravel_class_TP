<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\PostController;
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
//     return view('welcome');
// });
// laravel 8

Route::get('/',[PostController::class,'index']);

// laravel 7
// Route::get('/','App\Http\Controllers\PostController@index');

// Route::get('/post',function(){
//     // ORM
//      $data =  post::all();
//      dd($data);
//     // QUery Builder

// });
