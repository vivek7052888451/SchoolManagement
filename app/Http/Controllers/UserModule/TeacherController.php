<?php

namespace App\Http\Controllers\UserModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function teacher()
    {
        return view('backend.dashboard.admin.user.teacher.teacher_list');
    }
    public function teacherAdd()
    {
        return view('backend.dashboard.admin.user.teacher.add_teacher');
    }
}
