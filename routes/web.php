<?php

use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Frontend\FrontendController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'login'])->name('employee.login');

Route::get('/employee/dashboard-employee', [EmployeeController::class, 'dashboard'])->name('dashboard-employee');
Route::get('/employee/profile', [EmployeeController::class, 'profile'])->name('profile');
Route::get('/employee/settings', [EmployeeController::class, 'settings'])->name('settings');
Route::get('/employee/attendance', [EmployeeController::class, 'attendance'])->name('attendance');
Route::get('/employee/leave-application', [EmployeeController::class, 'leaveApplication'])->name('leave-application');

Route::get('/employee/documents', [EmployeeController::class, 'documents'])->name('documents');
Route::get('/employee/announcement', [EmployeeController::class, 'announcement'])->name('announcement');

Route::get('/employee/notification', [EmployeeController::class, 'notification'])->name('notification');

Route::get('/employee/chat', [EmployeeController::class,'chat'])->name('support');

Route::get('footer',[FrontendController::class,'footer']);
Route::get('/home',[FrontendController::class,'home'])->name('home');

