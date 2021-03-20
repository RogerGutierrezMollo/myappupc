<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //index create store show edit 
    public function index() {
        return view('admin/index');
    }
    //
}
