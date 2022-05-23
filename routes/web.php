<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );

Route::get( '/full-name', [HomeController::class, 'fullName'] );

Route::get( '/calculator', [HomeController::class, 'calculator'] )->name( 'calculator' );

Route::get( '/student', [StudentController::class, 'student'] )->name( 'student' );

//..........................

Route::post( '/get-full-name', [FullNameController::class, 'getFullName'] )->name( 'get-full-name' );

Route::post( '/get-calculator-result', [CalculatorController::class, 'getResult'] )->name( 'get-calculator-result' );

//  56:30 C:30
