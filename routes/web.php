<?php

use App\Http\Controllers\ActionController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['verify.shopify'])->name('home');

Route::get('/', [ActionController::class,'index'])->middleware(['verify.shopify'])->name('home');
Route::get('/download', [ActionController::class,'download']);
Route::get('/cd', [ActionController::class,'createExcel']);
Route::get('/view', [ActionController::class,'view']);
