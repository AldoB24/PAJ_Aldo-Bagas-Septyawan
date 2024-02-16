<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\View\View;

class VoterController extends Controller

{
    public function viewVoter()
    {
        return view('voters');
    }
}