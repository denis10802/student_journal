<?php

use App\Http\Controllers\Api\RecruitResponseApi;
use App\Http\Controllers\Api\StudentResponseApi;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\StudentController;
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



Route::prefix('api')->group(function () {
    Route::get('/student/{id}',[StudentResponseApi::class,'course']);
    Route::get('/recruits/{gender}/{age}',[RecruitResponseApi::class,'recruits']);
});


Auth::routes();

Route::get('/',[HomeController::class, 'index']);
Route::get('/students',[StudentController::class, 'index'])->name('students.index');
Route::get('/recruits',[RecruitController::class,'index'])->name('recruits.index');


