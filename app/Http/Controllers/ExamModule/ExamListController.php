<?php

namespace App\Http\Controllers\ExamModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamListController extends Controller
{
       public function examlist()
    {
        return view('backend.dashboard.admin.exam.examlist.exam_list');
    }
    public function examlistAdd()
    {
        return view('backend.dashboard.admin.exam.examlist.add_exam');
    }
}
