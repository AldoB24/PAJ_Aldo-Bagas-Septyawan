<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    public function studentuser()
    {
        return view('student_user');
    }
    public function teacheruser()
    {
        return view('teacher_user');
    }
    public function adminuser()
    {
        return view('admin_user');
    }
}
