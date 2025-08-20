<?php

use App\Http\Controllers\Api\Employer\LoginController;
use App\Http\Controllers\Api\Employer\RegisterController;
use Illuminate\Http\Request;
use  App\Models\Employee\Attendance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\Employer\EmployeeRegisterController;
use App\Http\Controllers\Api\Employee\LoginController as EmployeeLoginController;
use App\Http\Controllers\Api\Employer\EmployeeTerminateController;
use App\Http\Controllers\Api\Employee\AttendanceController;
use App\Http\Controllers\Api\Employee\LeaveManagementController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\AnnouncementController;
use App\Models\Employee\LeaveManagement;
use App\Http\Controllers\Api\FestivalController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/employer'], function(){
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/Update/{id}', [RegisterController::class, 'update']);
Route::post('/checkEmail', [RegisterController::class, 'checkEmail']);
Route::post('/Coupon', [RegisterController::class, 'applyCouponToEmployer']);
Route::get('/verification/{email}/{guid}', [RegisterController::class, 'verifyEmail'])->name('employer.verification');
Route::post('/employer-login',[LoginController::class, 'employerlogin']);
Route::post('/Forgot-Password', [LoginController::class, 'forgotpassword']);
Route::post('/Verify-OTP', [LoginController::class, 'verifyOtp']);
Route::post('/Reset-password',[LoginController::class, 'resetPassword']);

});
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/employer/logout', [LoginController::class, 'logout']);
    Route::get ('/employer/profile', [LoginController::class, 'profile']);
    Route::post('/employer/change-password',[LoginController::class, 'changepassword']);
    
   
    
});

Route::apiResource('permissions', PermissionController::class);
Route::get('permissions/{employee_id}/summary', [PermissionController::class, 'permissionSummary']);
Route::get('employee/permissions/card', [EmployeeRegisterController::class, 'getTodayPermissionProfiles']);


Route::post('/send-fcm', [\App\Http\Controllers\Api\NotificationController::class, 'send']);
Route::post('/employee/save-token', [LeaveManagementController::class, 'saveFcmToken']);
Route::post('/send-fcm-to-employee', [NotificationController::class, 'sendToEmployee']);


Route::post('/chat/send', [ChatController::class, 'sendMessage']);
Route::get('/chat/conversation', [ChatController::class, 'getConversation']);

// Route::get('/chat/employeeslist', [ChatController::class, 'allEmployeesList']);

Route::middleware('auth:sanctum')->get('/chat/employeeslist', [ChatController::class, 'allEmployeesList']);
Route::get('/chat/employerslist', [ChatController::class, 'allEmployersList']);


Route::get('/chat/contacts', [ChatController::class, 'searchChatContacts']);
Route::get('/chat/relevant/{type}/{id}', [ChatController::class, 'getRelevantChatList']);


// Employer view

// Route::get('/announcements', [AnnouncementController::class, 'index']); // Employees: read announcements
Route::post('/announcements', [AnnouncementController::class, 'store']);



// Employee view

// Route::post('/announcement/{id}/mark-read-multiple', [AnnouncementController::class, 'markAsReadByMultiple']);
// Route::get('/announcement/{id}/unread-info', [AnnouncementController::class, 'unreadEmployeeInfo']);



Route::post('/employee/notes', [EmployeeRegisterController::class, 'storeEmployeeNote']);

Route::get('/notes/by-employee/{employee_id}', [EmployeeRegisterController::class, 'getNotesByEmployeeId']);






// Employee use


Route::group(['prefix' => '/employee'], function(){
    Route::post('/employee-login',[EmployeeLoginController::class, 'employeelogin']);
    Route::get('/Emp-Details', [EmployeeTerminateController::class, 'employeedetails']);
     Route::get('/Special-Members', [EmployeeRegisterController::class, 'getBirthdayMembers']);
    Route::post('/Termination',[EmployeeTerminateController::class, 'Termination']);
    Route::post('/check-in', [AttendanceController::class, 'checkIn']);
    Route::post('/check-out', [AttendanceController::class, 'checkOut']);
    Route::post('/attendance-dashboard', [AttendanceController::class, 'dashboard']);
    Route::post('/Apply_Leave', [LeaveManagementController::class, 'store']);
    Route::put('/leave-management/{id}', [LeaveManagementController::class, 'updateLeaveStatus']);
    Route::get('/leave/remaining/{employee_id}', [LeaveManagementController::class, 'checkRemainingLeave']);
   
    Route::post('/Update/{id}', [EmployeeRegisterController::class, 'empprofileupdate']);
//   Route::get('/leave/status/{register_id}', [LeaveManagementController::class, 'statuscheck']);
 Route::put('/leaves/{id}/approve', [LeaveManagementController::class, 'approve']);
});
 




 Route::middleware('auth:sanctum')->group(function (){
      Route::get ('/employee/profile', [EmployeeLoginController::class, 'profile']);
      Route::post('/employee/change-password',[EmployeeLoginController::class, 'changepassword']);
      Route::delete('/employee/{id}', [EmployeeLoginController::class, 'destroy']);  
      Route::post('/employee/logout', [EmployeeLoginController::class, 'logout']);
        
       
 });


 Route::get('/approved-leaves-by-type', [EmployeeRegisterController::class, 'getApprovedLeavesByType']);

// Route::get('/leave/{id}/approver', [LeaveManagementController::class, 'getLeaveWithApprover']);


Route::post('/festivals', [FestivalController::class, 'store']);

// Get all festivals (GET)
Route::get('/festivals', [FestivalController::class, 'index']);


Route::get('/leaves/pending', [LeaveManagementController::class, 'getPendingLeaves']);



Route::put('/leave/{id}/update', [LeaveManagementController::class, 'update']);




 // routes/api.php

 











Route::get('/privacy', function () {
  return response()->json([
      'pdf_url' => url('frontend/PrivacyPolicy.pdf')
  ]);
});

Route::get('/terms-conditions', function () {
  return response()->json([
      'pdf_url' => url('frontend/Terms_and_Conditions.pdf')
  ]);
});

Route::get('/Faqs', [FaqController::class, 'faqs']);
Route::post('/Employee-create', [EmployeeRegisterController::class, 'register']);
Route::get('/Employee-count', [EmployeeRegisterController::class, 'getTotalEmployees']);

Route::get('/hi',function(){
    return  'sowmiya';
});






Route::get('/notifications', [EmployeeRegisterController::class, 'getAllNotifications']);
Route::get('/employee/leaves/today-approved', [LeaveManagementController::class, 'getTodaysApprovedLeavesWithoutPermission']);


Route::get('/announcements', [AnnouncementController::class, 'announcementList']);

Route::get('/announcement/{id}', [AnnouncementController::class, 'show']);

// Route::get('/announcements/{id}/read-status', [AnnouncementController::class, 'announcementReadStatus']);


Route::post('/send-push', [EmployeeRegisterController::class, 'send']);


Route::post('announcements/{announcement}/comments', [AnnouncementController::class, 'addComment']);
Route::get('announcements/{announcement}/comments', [AnnouncementController::class, 'getComments']);



// Route::post('/announcements/{id}/like', [AnnouncementController::class, 'like']);
// Route::post('/announcements/{id}/unlike', [AnnouncementController::class, 'unlike']);
// Route::get('/announcements/{id}/liked-employees', [AnnouncementController::class, 'likedEmployees']);

Route::post('/announcements/{id}/react', [AnnouncementController::class, 'react']);
Route::post('/announcements/{id}/remove-reaction', [AnnouncementController::class, 'removeReaction']);
Route::get('/announcements/{id}/reactions', [AnnouncementController::class, 'reactionsList']);


Route::get('leave/employee/{employee_id}', [LeaveManagementController::class, 'getLeavesByEmployee']);



Route::put('/employee/{id}/status', [EmployeeRegisterController::class, 'updateStatus']);
Route::get('/employees/status', [EmployeeRegisterController::class, 'getEmployeesByStatus']);
Route::get('attendance/{employee_id}/yearly-details', [AttendanceController::class, 'getAllYearlyAttendanceDetails']);