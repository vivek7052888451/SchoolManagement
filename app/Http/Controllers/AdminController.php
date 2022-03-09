<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.admin.index');
    }
    //Admin/user module
////////////////////////////
    public function teacher()
    {
        return view('backend.dashboard.admin.user.teacher.teacher_list');
    }
    public function teacherAdd()
    {
        return view('backend.dashboard.admin.user.teacher.add_teacher');
    }
        public function student()
    {
        return view('backend.dashboard.admin.user.student.student_list');
    }
    public function studentAdd()
    {
        return view('backend.dashboard.admin.user.student.add_student');
    }
    public function parent()
    {
        return view('backend.dashboard.admin.user.parent.parent_list');
    }
    public function parentAdd()
    {
        return view('backend.dashboard.admin.user.parent.add_parent');
    }
    ////////////////
    /////////////////
   
   //////////////Admin/Exam module/////////
    /////////////////////////////////////

      public function examlist()
    {
        return view('backend.dashboard.admin.exam.examlist.exam_list');
    }
    public function examlistAdd()
    {
        return view('backend.dashboard.admin.exam.examlist.add_exam');
    }
}
