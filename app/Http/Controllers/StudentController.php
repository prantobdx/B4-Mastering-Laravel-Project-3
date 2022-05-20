<?php

namespace App\Http\Controllers;

use App\Models\student\Student;

class StudentController extends Controller
{
    public function student()
    {
        // return 'hello world';

        // echo $students->name;

        foreach ( Student::index() as $student )
        {
            echo $student['name'] . '<br/>';
        }
    }
    public function index()
    {
        $students = new Student();
        $students->index();
    }
}