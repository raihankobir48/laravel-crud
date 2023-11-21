<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SessionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/create',[StudentController::class, 'create'])->name('create');
Route::get('/student/manage',[StudentController::class, 'studentManage'])->name('student.manage');
Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');
Route::post('/update',[StudentController::class, 'update'])->name('update');
//Route::get('delete/{id}',[StudentController::class, 'delete'])->name('delete');
Route::post('/delete',[StudentController::class, 'delete'])->name('delete');
Route::get('/department/wise/student/{id}',[DepartmentController::class, 'departmentWiseStudent'])->name('department-wise-student');

Route::resources(['departments'=>DepartmentController::class]);
Route::resources(['sessions'=>SessionController::class]);
Route::get('/session/wise/student',[SessionController::class, 'sessionWiseStudent'])->name('session-wise-student');
