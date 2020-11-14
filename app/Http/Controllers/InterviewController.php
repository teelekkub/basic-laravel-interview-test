<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function hello() {
        return response()->json(['hello' => 'world']);
    }
}

