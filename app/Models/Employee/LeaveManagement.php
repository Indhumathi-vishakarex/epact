<?php

namespace App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer\register as EmployerRegister;
use Illuminate\Database\Eloquent\Model;

class LeaveManagement extends Model
{
     use HasFactory;
    
    protected $table = "leave_management";
   protected $fillable =[
       'employee_id',
       'from_date',
       'to_date',
       'type',
       'description',
       'total_days',
       'status',
       'action_by'
       ];
       
      public function register(){
          
       return $this->belongsTo(Register::class, 'employee_id', 'employee_id');
      } 
 public function actionedBy()
{
    return $this->belongsTo(EmployerRegister::class, 'action_by','id'); 
}


public function employee() {
    return $this->belongsTo(Register::class, 'employee_id', 'employee_id');
}

}
