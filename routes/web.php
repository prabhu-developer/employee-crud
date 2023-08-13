<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['password.request' => false, 'password.reset' => false]);

Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', [EmployeesController::class, 'index'])->name('home');
    Route::resource('employee',EmployeesController::class);
});