<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Employee\Register;

class EmployeeLoginController extends Controller
{
    
    public function employeelogin(){

        
        return view('Employee.employee-login');

    }

public function employeeslogin(Request $request)
{
    $request->validate([
        'company_email' => 'required|email',
        'password' => 'required|min:8'
    ]);

    $employee = Register::where('company_email', $request->company_email)->first();

    if (!$employee) {
        return back()->withErrors(['company_email' => 'User not found'])->withInput();
    }

    if (!Hash::check($request->password, $employee->password)) {
   
        return back()->withErrors(['password' => 'Invalid email or password'])->withInput();
    }

    // Log in the employee using Auth guard (make sure guard is configured)
    Auth::guard('employee')->login($employee);

    // Redirect to employee dashboard on success
    return redirect()->route('dashboard-employee');
}



            
    //        
    //           if (!$employee) {
    //     return response()->json(['success' => false, 'message' => 'User not found'], 404);
    //  }
          
    //        if (!Hash::check($request->password, $employee->password)) {
    //     return response()->json(['success' => false, 'message' => 'Invalid email or password'], 401);
    //  }



    //   $plainTextToken = $employee->createToken('merchant-api-token')->plainTextToken;

       

    //   return response()->json([
    //      'success' => true,
    //     'message' => 'Login successful',
    //     'token' => $plainTextToken,
       
    //   ]);
}





