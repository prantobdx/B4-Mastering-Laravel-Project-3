<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view( 'home.home' );
    }
    public function fullName()
    {
        return view( 'fullName.full-name' );
    }
    public function calculator()
    {
        return view( 'calculator.calculator' );
    }

}
