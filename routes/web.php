<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\ParentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\Admin\UserModuleController;
use App\Http\Controllers\UserModule\StudentController;
use App\Http\Controllers\UserModule\ParentController;
use App\Http\Controllers\UserModule\TeacherController;
use App\Http\Controllers\UserModule\RoleController;
use App\Http\Controllers\ExamModule\ExamListController;
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
   Auth::routes(['register'=>false]); 
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBackHistory']],function(){
    Route::get('dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminDashboardController::class,'profile'])->name('admin.profile');

    //
     Route::get('teacher',[TeacherController::class,'teacher'])->name('admin.teacher');
     Route::get('teacher/teacher-add',[TeacherController::class,'teacherAdd'])->name('admin.add-teacher');

    ///
     Route::get('student',[StudentController::class,'student'])->name('admin.student');
     Route::get('student/student-add',[StudentController::class,'studentAdd'])->name('admin.add-student');
     //
          Route::get('parent',[ParentController::class,'parent'])->name('admin.parent');
     Route::get('parent/parent-add',[ParentController::class,'parentAdd'])->name('admin.add-parent');
     //
    Route::get('examlist',[ExamListController::class,'examlist'])->name('admin.examlist');
      Route::get('examlist/examlist-add',[ExamListController::class,'examlistAdd'])->name('admin.examlist-add');

      //Role
      Route::get('role',[RoleController::class,'rolelist'])->name('admin.role');
});


Route::group(['prefix'=>'student','middleware'=>['isStudent','auth']],function(){
    Route::get('dashboard',[StudentDashboardController::class,'index'])->name('student.dashboard');
    Route::get('profile',[StudentDashboardController::class,'profile'])->name('student.profile');
});

Route::group(['prefix'=>'teacher','middleware'=>['isTeacher','auth']],function(){
    Route::get('dashboard',[TeacherDashboardController::class,'index'])->name('teacher.dashboard');
    Route::get('profile',[TeacherDashboardController::class,'profile'])->name('teacher.profile');
});

Route::group(['prefix'=>'parent','middleware'=>['isParent','auth']],function(){
    Route::get('dashboard',[ParentDashboardController::class,'index'])->name('parent.dashboard');
    Route::get('profile',[ParentDashboardController::class,'profile'])->name('parent.profile');
});