<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeLoginController extends Controller
{
    
    public function employeelogin(){

        
        return view('Employee.employee-login');

    }

}
