<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Phone;
use App\Models\Member;

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

Route::get('/index',[UserController::class,'insertInto'])->name('index');

Route::get('/fetch-data-from-phone',[UserController::class,'fetchDataFromPhone'])->name('fetch-data-from-phone');
Route::get('/fetch-data-from-member',[UserController::class,'fetchDataFromMember'])->name('fetch-data-from-member');
