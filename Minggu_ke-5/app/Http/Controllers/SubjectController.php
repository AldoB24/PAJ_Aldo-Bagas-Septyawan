<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    public function studentview()
    {
        return view('student');
    }
    public function teacherview()
    {
        return view('teacher');
    }
    public function adminview()
    {
        return view('admin');
    }
}
