<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function dashboard(){

        return view('Employer.dashboard-employer');
    }


    public function account(){

        return view('Employer.account');
    }


    
    public function employeelist(){

        return view('Employer.emp-list',);
    }


    public function addemployee(){

        return view('Employer.add-emp',);
    }

    
    public function terminatemployee(){

        return view('Employer.terminate-emp',);
    }


public function documentverification(){

        return view('Employer.doc-verify',);
}


public function leaveapplication(){
   return view('Employer.leave-app');

}
public function employeeattendance(){
return view('Employer.emp-attendance');
}

public function employerannouncement(){

    return view('Employer.emp-announcement');
}
public function employeenotification(){
      return view('Employer.emp-notification');
}
public function supportchat(){
    return view('employer.emp-support');
}

}

