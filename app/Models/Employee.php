<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    protected $fillable = [
        "id",
        "employee_id",
        "employee_name",
        "employee_email",
        "employee_phone",
        "employee_address",
        "employee_gender",
        "employee_role",
        "employee_image",
        "employee_status",
        "department_id",
        "position_id",
        "employee_reason_for_leaving",
        "employee_start_date",
        "employee_end_date",
        "employee_sss",
        "employee_philhealth",
        "employee_pag_ibig",
        "employee_tin",
        "employee_provincial_address",
        "employee_birthdate",
        "employee_date_birth",
        "employee_birth_place",
        "employee_civil_status",
        "employee_spouse",
        "employee_name_of_spouse",
        "employee_company",
        "employee_father",
        "employee_mother",
        "employee_dependents",
        "employee_educational_background",
        "employee_employment_history",
        "employee_character_reference",
        "employee_person_to_notify",
       
        
    ];

   
}
