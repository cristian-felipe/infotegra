<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;

class TeacherController extends Controller
{
    public function __invoke()
    {
       echo url('students/{id}');
       
       //  return view('teacher');
    }
    //
}
