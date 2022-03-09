<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
   Auth::routes(); 
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBackHistory']],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');

    //
     Route::get('teacher',[AdminController::class,'teacher'])->name('admin.teacher');
     Route::get('teacher/teacher-add',[AdminController::class,'teacherAdd'])->name('admin.add-teacher');

    ///
     Route::get('student',[AdminController::class,'student'])->name('admin.student');
     Route::get('student/student-add',[AdminController::class,'studentAdd'])->name('admin.add-student');
     //
          Route::get('parent',[AdminController::class,'parent'])->name('admin.parent');
     Route::get('parent/parent-add',[AdminController::class,'parentAdd'])->name('admin.add-parent');
     //
    Route::get('examlist',[AdminController::class,'examlist'])->name('admin.examlist');
      Route::get('examlist/examlist-add',[AdminController::class,'examlistAdd'])->name('admin.examlist-add');
});


Route::group(['prefix'=>'student','middleware'=>['isStudent','auth']],function(){
    Route::get('dashboard',[StudentController::class,'index'])->name('student.dashboard');
    Route::get('profile',[StudentController::class,'profile'])->name('student.profile');
});

Route::group(['prefix'=>'teacher','middleware'=>['isTeacher','auth']],function(){
    Route::get('dashboard',[TeacherController::class,'index'])->name('teacher.dashboard');
    Route::get('profile',[TeacherController::class,'profile'])->name('teacher.profile');
});

Route::group(['prefix'=>'parent','middleware'=>['isParent','auth']],function(){
    Route::get('dashboard',[ParentController::class,'index'])->name('parent.dashboard');
    Route::get('profile',[ParentController::class,'profile'])->name('parent.profile');
});