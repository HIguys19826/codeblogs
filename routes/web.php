<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postControllers;

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
Route::get('/posts',[postControllers::class,'posts']);

Route::get('/posts/show/{id}',[postControllers::class,'show']);
Route::get('/posts/search/{keyword}',[postControllers::class,'search']);
Route::get('/posts/latest/{num}',[postControllers::class,'latest']);
Route::get('/tags',[postControllers::class,'tags']);