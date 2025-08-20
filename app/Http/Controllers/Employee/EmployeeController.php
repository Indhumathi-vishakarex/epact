<?php

namespace App\Http\Controllers\Employee;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee\LeaveManagement;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{


public function dashboard()
{
    $employee = Auth::guard('employee')->user();

    // Get today's attendance
    $todayAttendance = Attendance::where('employee_id', $employee->employee_id)
        ->whereDate('date', now('Europe/London')->toDateString())
        ->first();

    $workedHours = null;
    $remainingHours = null;
    $totalOfficeHours = 8; 
    $officeEnd = \Carbon\Carbon::createFromTimeString('6:00 PM', 'Europe/London');

    if ($todayAttendance && $todayAttendance->check_in) {
        $checkIn = \Carbon\Carbon::parse($todayAttendance->check_in);

        if ($todayAttendance->check_out) {
            $checkOut = \Carbon\Carbon::parse($todayAttendance->check_out);
            $totalMinutes = $checkIn->diffInMinutes($checkOut);
        } else {
            $now = now('Europe/London');
            $totalMinutes = $checkIn->diffInMinutes($now);
        }

        // ✅ Format worked as HH:MM
        $hours   = floor($totalMinutes / 60);
        $minutes = $totalMinutes % 60;
        $workedHours = str_pad($hours, 2, '0', STR_PAD_LEFT) . ":" .
                       str_pad($minutes, 2, '0', STR_PAD_LEFT) . " mins";

        // ✅ Remaining time (only if not checked out yet)
        if (!$todayAttendance->check_out) {
            $now = now('Europe/London');
            $remainingMinutes = $now->diffInMinutes($officeEnd, false);

            if ($remainingMinutes <= 0) {
                $remainingHours = "00:00 mins";
            } else {
                $rHours   = floor($remainingMinutes / 60);
                $rMinutes = $remainingMinutes % 60;
                $remainingHours = str_pad($rHours, 2, '0', STR_PAD_LEFT) . ":" .
                                  str_pad($rMinutes, 2, '0', STR_PAD_LEFT) . " mins";
            }
        } else {
            $remainingHours = "00:00 mins";
        }
    }

       $leavesTaken =LeaveManagement::where('employee_id', $employee->employee_id)
        ->where('status', 'approved')
        ->whereIn('type', ['sick', 'casual'])
        ->count();

     $documentFields = [
        'profile',
        'signature_uload',
        'driving_license',
        'passport',
        'offerletter',
        'nda',
        'aadhar',
        'experience',
        
    ];


     $uploadedDocsCount = collect($documentFields)->filter(function ($field) use ($employee) {
        return !empty($employee->$field);
    })->count();

    $totalPresentDays = Attendance::where('employee_id', $employee->employee_id)
    ->whereNotNull('check_in')   // only days where they checked in
    ->count();


    $now = now('Europe/London');  
$startOfMonth = $now->copy()->startOfMonth();
$endOfMonth   = $now->copy()->endOfMonth();

$totalWorkingDays = 0;
$remainingWorkingDays = 0;

for ($date = $startOfMonth->copy(); $date <= $endOfMonth; $date->addDay()) {
    if (!$date->isWeekend()) { // exclude Saturday & Sunday
        $totalWorkingDays++;
        if ($date->gte($now)) {
            $remainingWorkingDays++;
        }
    }
}


    return view('Employee.dashboard-employee', compact(
        'employee',
        'todayAttendance',
        'workedHours',
        'remainingHours',
        'totalOfficeHours',
        'uploadedDocsCount',
        'leavesTaken',
        'totalPresentDays',
        'remainingWorkingDays'
    ));
}

    
    // public function profile(){
    //     return view('Employee.profile');

    // }


      public function settings(){
        return view('Employee.settings');

    }


      public function attendance(){
        return view('Employee.attendance');

    }





    public function documents(){
    return view('Employee.documents');

    }


     public function announcement(){
    return view('Employee.announcement');

    }


     public function notification(){
    return view('Employee.notification');

    }

    
     public function chat(){
    return view('Employee.chat');

    }


}
