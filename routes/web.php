<?php

use App\Http\Controllers\FullNameController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );

Route::get( '/full-name', [HomeController::class, 'fullName'] );

Route::get( '/calculator', [HomeController::class, 'calculator'] )->name( 'calculator' );

Route::post( '/get-full-name', [FullNameController::class, 'getFullName'] )->name( 'get-full-name' );

// 1:46:00 C:28