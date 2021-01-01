<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontrooler;


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

Route::get('/insertdata',[mycontroller::class,'insert']);
Route::get('/index',[mycontroller::class,'index']);
Route::post('/getdata',[mycontroller::class,'getdata']);


// Route::get('/', function () {
//     return view('welcome');
// });
