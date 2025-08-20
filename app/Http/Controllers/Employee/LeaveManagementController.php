<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Employee\LeaveManagement;

class LeaveManagementController extends Controller
{
    public function storeWeb(Request $request)
{
    $request->validate([
        'employee_id' =>'required|exists:employee_register,employee_id',
        'from_date' => 'required|date',
        'to_date' => 'required|date|after_or_equal:from_date',
        'type' => 'required|string',
        'description' => 'nullable|string',
        'docFile' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    $from = Carbon::parse($request->from_date);
    $to = Carbon::parse($request->to_date);
    $totalLeaveDays = 0;

    for ($date = $from->copy(); $date <= $to; $date->addDay()) {
        if (!$date->isWeekend()) {
            $totalLeaveDays++;
        }
    }

    $year = now()->year;
    $leaveTaken = LeaveManagement::where('employee_id', $request->employee_id)
        ->whereYear('from_date', $year)
        ->sum('total_days');

    $totalAllowed = 12;
    $remaining = max(0, $totalAllowed - $leaveTaken);

    if ($totalLeaveDays > $remaining) {
        return back()->withErrors([
            'leave_limit' => "Leave limit exceeded. You have only {$remaining} days left this year."
        ])->withInput();
    }

    // handle proof file
    $proofPath = null;
    if ($request->hasFile('docFile')) {
        $proofPath = $request->file('docFile')->store('leave_proofs', 'public');
    }

    LeaveManagement::create([
        'employee_id' => $request->employee_id,
        'from_date' => $request->from_date,
        'to_date' => $request->to_date,
        'type' => $request->type,
        'description' => $request->description,
        'total_days' => $totalLeaveDays,
        'status' => 'pending',
        'action_by' => null,
        'proof' => $proofPath,
    ]);

    return redirect()->route('leave-application')->with('success', 'Leave applied successfully.');
}

//   public function leaveApplication()
// {
//     $employee = auth()->guard('employee')->user();

//     // get this employee’s leave requests
//     $leaves = LeaveManagement::where('employee_id', $employee->employee_id)
//         ->orderBy('created_at', 'desc')
//         ->get();

//     return view('Employee.leave-application', compact('leaves'));
// }


public function leaveApplication()
{
    $employee = auth()->guard('employee')->user();
    $employeeId = $employee->employee_id;
    $year = now()->year;

    // All leaves for table
    $leaves = LeaveManagement::where('employee_id', $employeeId)
        ->orderBy('created_at', 'desc')
        ->get();

    // Yearly totals
    $totalAllowed = 12;
    $leaveTaken = LeaveManagement::where('employee_id', $employeeId)
        ->whereYear('from_date', $year)
        ->where('status', 'approved')
        ->sum('total_days');

    $remaining = max(0, $totalAllowed - $leaveTaken);

    // Summary counts
    $statusCounts = LeaveManagement::where('employee_id', $employeeId)
        ->selectRaw('status, COUNT(*) as cnt')
        ->groupBy('status')
        ->pluck('cnt', 'status');

    // Only pending requests for the "pending" card
    $pendingLeaves = LeaveManagement::where('employee_id', $employeeId)
        ->where('status', 'pending')
        ->orderBy('from_date', 'asc')
        ->get();

    return view('Employee.leave-application', compact(
        'leaves', 'totalAllowed', 'leaveTaken', 'remaining', 'statusCounts', 'pendingLeaves'
    ));
}

}
