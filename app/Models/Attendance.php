<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Attendance extends Model
{
     use HasFactory;
     protected $table = 'attendance';
 
    public $timestamps = true; 

    protected $fillable = [
        'employee_id',
        'date',
        'check_in',
        'check_out',
        'total_work_minutes',
    ];

 public function employee()
{
    return $this->belongsTo(\App\Models\Employee\Register::class, 'employee_id', 'employee_id');
}

}
