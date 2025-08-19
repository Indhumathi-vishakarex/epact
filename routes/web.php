<?php

use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\EmployeeLoginController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\Employer\LoginController;
use App\Http\Controllers\Frontend\FrontendController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.index');
});
// sema techinque

Route::get('/unauthorize',function(){
    return 'unauthorize access';
})->name('
');



// Route::get('/employee/dashboard-employee', [EmployeeController::class, 'dashboard'])->name('dashboard-employee');
// Route::get('/employee/profile', [EmployeeController::class, 'profile'])->name('profile');
// Route::get('/employee/settings', [EmployeeController::class, 'settings'])->name('settings');
// Route::get('/employee/attendance', [EmployeeController::class, 'attendance'])->name('attendance');
// Route::get('/employee/leave-application', [EmployeeController::class, 'leaveApplication'])->name('leave-application');

// Route::get('/employee/documents', [EmployeeController::class, 'documents'])->name('documents');
// Route::get('/employee/announcement', [EmployeeController::class, 'announcement'])->name('announcement');

// Route::get('/employee/notification', [EmployeeController::class, 'notification'])->name('notification');

// Route::get('/employee/chat', [EmployeeController::class,'chat'])->name('support');
    Route::get('login',[LoginController::class,'login']);

Route::group(['prefix' => 'employer'], function () {

   Route::get('/dashboard-employer', [EmployerController::class, 'dashboard'])->name('dashboard-employer');
   Route::get('/account', [EmployerController::class, 'account'])->name('account');
   
Route::get('/emp-list', [EmployerController::class, 'employeelist'])->name('emp-list');
  
Route::get('/add-emp', [EmployerController::class, 'addemployee'])->name('add-emp');

Route::get('/terminate-emp', [EmployerController::class, 'terminatemployee'])->name('terminate-emp');
Route::get('/doc-verify', [EmployerController::class, 'documentverification'])->name('doc-verify');
Route::get('/leave-app', [EmployerController::class, 'leaveapplication'])->name('leave-app');
Route::get('/emp-attendance', [EmployerController::class, 'employeeattendance'])->name('emp-attendance');

Route::get('/emp-announcement', [EmployerController::class, 'employerannouncement'])->name('emp-announcement');


Route::get('/emp-notification', [EmployerController::class, 'employeenotification'])->name('emp-notification');
Route::get('/emp-chat', [EmployerController::class, 'supportchat'])->name('emp-chat');

});



Route::middleware('auth.employee')->group(function () {
    Route::get('/dashboard-employee', [EmployeeController::class, 'dashboard'])
        ->name('dashboard-employee');
});




Route::get('/employee-login', [EmployeeLoginController::class, 'employeelogin']);
Route::group(['prefix' => 'employee'], function () {
    Route::post('/employees-login',[EmployeeLoginController::class, 'employeeslogin'])->name('employees-login');

    // Employee routes
    // Route::get('/dashboard-employee', [EmployeeController::class, 'dashboard'])->name('dashboard-employee');
    Route::get('/profile', [EmployeeController::class, 'profile'])->name('profile');
    Route::get('/settings', [EmployeeController::class, 'settings'])->name('settings');
    Route::get('/attendance', [EmployeeController::class, 'attendance'])->name('attendance');
    Route::get('/leave-application', [EmployeeController::class, 'leaveApplication'])->name('leave-application');
    Route::get('/documents', [EmployeeController::class, 'documents'])->name('documents');
    Route::get('/announcement', [EmployeeController::class, 'announcement'])->name('announcement');
    Route::get('/notification', [EmployeeController::class, 'notification'])->name('notification');
    Route::get('/chat', [EmployeeController::class, 'chat'])->name('support');
});


Route::get('footer',[FrontendController::class,'footer']);
Route::get('/home',[FrontendController::class,'home'])->name('home');

