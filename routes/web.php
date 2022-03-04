<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhuloodController;
use App\Http\Controllers\RiyadhController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Get , POST , Put , DELETE
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',function(){
    return 'Khulood Batis ';
});
Route::view('khulood','index');

Route::get('khulood',[KhuloodController::class,'index']);

Route::get('users/{id}',[KhuloodController::class,'show']);

Route::get('sum/{id}',[KhuloodController::class,'sum']);





Route::get('riyadh',[RiyadhController::class,'index']);


Route::get('riyadh/{id}',[RiyadhController::class,'show']);