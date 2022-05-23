<?php

namespace App\Http\Controllers;

use App\Models\student\Student;

class StudentController extends Controller
{
    protected $students;

    public function student()
    {
        $this->students = Student::index();

        return view( 'student.view-students', ['students' => $this->students] );
    }
}