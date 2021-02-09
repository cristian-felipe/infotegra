<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CrudController;
use App\Models\Student;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('Home', HomeController::class); 
Route::post('Home/store', [HomeController::class,'store'])->name('Home/store');
Route::get('students/{id}', [StudentController::class,'index']);
Route::get('teacher', TeacherController::class);
Route::get('/', HomeController::class)->middleware('start'); //Ruta ruta login con middleware
Route::match(['get', 'post'], 'create',[CrudController::class,'create'])->name('create');

//Route::get('students/create', [StudentController::class,'index','create'])->name('students/create');


