<?php

namespace App\Http\Controllers\UserModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    
    public function parent()
    {
        return view('backend.dashboard.admin.user.parent.parent_list');
    }
    public function parentAdd()
    {
        return view('backend.dashboard.admin.user.parent.add_parent');
    }
}
