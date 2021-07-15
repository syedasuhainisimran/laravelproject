<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

//Route::get('/re', function () {
    return view('parts.retry');
//});


Route::get('/see', function () {
    return view('parts.app');
});

//Route::get('/eat',[StudentController::class,'showdata']) ->name('student.store');
Route::post('/store',[StudentController::class,'showdata']) ->name('student.store');

Route::get('/saw', function () {
    return view('data.alldata');
});
