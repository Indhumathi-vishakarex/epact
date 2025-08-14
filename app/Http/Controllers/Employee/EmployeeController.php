<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function dashboard(){
        return view('Employee.dashboard-employee');

    }

    
    public function profile(){
        return view('Employee.profile');

    }


      public function settings(){
        return view('Employee.settings');

    }


      public function attendance(){
        return view('Employee.attendance');

    }


    public function leaveApplication(){
    return view('Employee.leave-application');

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
