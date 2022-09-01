<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BikeController;

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

// Route::get('/student',[訂位書本::class,'訂位人名字']);
// 可以這樣想

// 抓一個/student/name-"kai"/num-"55688" 
// Route::get('/student/{name}/{num}',function($name,$num){
//     return "Name $name num $num";
// });


// Route::get('/student/{name}/{num}',[StudentController::class,'getByUrl']);
// Route::get('/student',[StudentController::class,'index']);
// Route::get('/student',[StudentController::class,'index'])->name('student');
// Route::get('/student',[StudentController::class,'index']);

Route::resource('students', StudentController::class);


Route::get('/', function () {
    return view('welcome');
});

// Route::resource('bikes', BikeController::class);
