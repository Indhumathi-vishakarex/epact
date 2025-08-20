<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attendance;
class AttendanceController extends Controller
{
    public function checkIn(Request $request)
{
    // $request->validate([
    //     'employee_id' => 'required|exists:employee_register,employee_id',
    // ]);
// $employeeId = auth()->guard('employee')->id();
$employeeId = auth()->guard('employee')->user()->employee_id;

    $now = Carbon::now();
    //  $now = Carbon::now('Europe/London');  // Apply correct timezone
    // $officeEnd = Carbon::createFromTimeString('6:00 PM', 'Europe/London');
    $officeEnd = Carbon::createFromTimeString('6:00 PM');
    $totalOfficeHours = 8; 

    // Get or create today's attendance
    $attendance = Attendance::firstOrCreate(
        [
            'employee_id' => $employeeId,
            'date' => $now->toDateString()
        ],
        [
            'check_in' => $now
        ]
    );

    // Use existing check-in time
    $checkInTime = Carbon::parse($attendance->check_in);

    // Calculate worked duration
    $workedDuration = $checkInTime->diff($now);
    $workedHours = $workedDuration->h;
    $workedMinutes = $workedDuration->i;

    // Calculate remaining duration
    $remainingDuration = $now->diff($officeEnd, false);
    $remainingHours = $remainingDuration->invert ? 0 : $remainingDuration->h;
    $remainingMinutes = $remainingDuration->invert ? 0 : $remainingDuration->i;
    
    // Working days this month
     $startOfMonth = $now->copy()->startOfMonth();
        $endOfMonth = $now->copy()->endOfMonth();

        $totalWorkingDays = 0;
        $remainingWorkingDays = 0;

        for ($date = $startOfMonth->copy(); $date <= $endOfMonth; $date->addDay()) {
            if (!$date->isWeekend()) {
                $totalWorkingDays++;
                if ($date->gte($now)) {
                    $remainingWorkingDays++;
                }
            }
        }

    return response()->json([
        'status' => true,
        'employee_id' => $employeeId,
        'check_in_time' => $checkInTime->format('h:i A'),
        'current_time' => $now->format('h:i A'),
        'office_hours' => $totalOfficeHours . ' hours',
        'worked_duration' => "$workedHours hours $workedMinutes minutes",
        'remaining_duration' => "$remainingHours hours $remainingMinutes minutes",
        'break_time' => "01:00 hour",
        'total_working_days_this_month' => $totalWorkingDays,
        'remaining_working_days_this_month' => $remainingWorkingDays,
        'message' => 'Checked in successfully'
    ]);
}



public function checkOut(Request $request)
{
    $request->validate([
        'comment' => 'required|string',
    ]);

    $employeeId = auth()->guard('employee')->user()->employee_id;
    $now = Carbon::now();

    $attendance = Attendance::where('employee_id', $employeeId)
        ->where('date', $now->toDateString())
        ->first();

    if (!$attendance || !$attendance->check_in) {
        return response()->json([
            'status' => false,
            'message' => 'Check-in not found for today. Please check in first.'
        ], 400);
    }

    $attendance->check_out = $now;
    $attendance->save();

    $checkInTime = Carbon::parse($attendance->check_in);
    $checkOutTime = Carbon::parse($attendance->check_out);
    $workedDuration = $checkInTime->diff($checkOutTime);

    return response()->json([
        'status' => true,
        'employee_id' => $employeeId,
        'check_in_time' => $checkInTime->format('h:i A'),
        'check_out_time' => $checkOutTime->format('h:i A'),
        'worked_duration' => "{$workedDuration->h} hours {$workedDuration->i} minutes",
        'message' => 'Checked out successfully'
    ]);
}



}
