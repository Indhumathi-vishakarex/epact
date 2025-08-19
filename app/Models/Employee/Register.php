<?php

namespace App\Models\Employee;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;   // <-- add this

class Register extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;  // <-- add HasApiTokens here

    protected $table = 'employee_register';
    protected $guard_name = 'employee';

    protected $fillable = [
        'employer_id',
        'employee_id',
        'first_name',
        'last_name',
        'email',
        'company_email',
        'password',
        'phone_number',
        'Emergency_num',
        'profile',
        'address',
        'city',
        'post_code',
        'signature_uload',
        'driving_license',
        'passport',
        'offerletter',
        'department',
        'gender',
        'employment_type',
        'basic_salary',
        'joining_date',
        'designation',
        'blood_group',
        'date_of_birth',
        'start_time',
        'end_time',
        'fcm_token',
    ];

    protected $attributes = [
        'is_active' => 0,
    ];

    public function getAuthIdentifierName()
    {
        return 'company_email'; // login using company_email
    }

    protected $casts = [
        'joining_date' => 'date',
        'date_of_birth' => 'date',
        'start_time' => 'string',
        'end_time' => 'string',
        'basic_salary' => 'decimal:2',
    ];

    // Relationships
    public function offerLetters()
    {
        return $this->hasMany(OfferLetter::class, 'employee_id', 'id');
    }

    public function terminations()
    {
        return $this->hasMany(Termination::class, 'employee_id', 'employee_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'employee_id', 'employee_id');
    }

    public function leaveManagements()
    {
        return $this->hasMany(LeaveManagement::class, 'employee_id', 'employee_id');
    }
}
