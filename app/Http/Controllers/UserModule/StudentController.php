<?php

namespace App\Http\Controllers\UserModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
       public function student()
    {
        return view('backend.dashboard.admin.user.student.student_list');
    }
    public function studentAdd()
    {
        return view('backend.dashboard.admin.user.student.add_student');
    }
}
