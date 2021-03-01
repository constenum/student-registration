<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'first_name',
        'preferred_name',
        'middle_name',
        'last_name',
        'email',
        'cell_phone',
        'parent_status',
        'student_lives_with',
        'primary_household_street',
        'primary_household_unit_number',
        'primary_household_city',
        'primary_household_state',
        'primary_household_zip',
        'primary_household_phone',
        'primary_household_mailing_street',
        'primary_household_mailing_unit_number',
        'primary_household_mailing_city',
        'primary_household_mailing_state',
        'primary_household_mailing_zip',
        'contact_1_relation',
        'contact_1_title',
        'contact_1_first_name',
        'contact_1_last_name',
        'contact_1_email',
        'contact_1_cell',
        'contact_2_relation',
        'contact_2_title',
        'contact_2_first_name',
        'contact_2_last_name',
        'contact_2_email',
        'contact_2_cell',
        'secondary_household_street',
        'secondary_household_unit_number',
        'secondary_household_city',
        'secondary_household_state',
        'secondary_household_zip',
        'secondary_household_phone',
        'secondary_household_mailing_street',
        'secondary_household_mailing_unit_number',
        'secondary_household_mailing_city',
        'secondary_household_mailing_state',
        'secondary_household_mailing_zip',
        'contact_3_relation',
        'contact_3_title',
        'contact_3_first_name',
        'contact_3_last_name',
        'contact_3_email',
        'contact_3_cell',
        'contact_4_relation',
        'contact_4_title',
        'contact_4_first_name',
        'contact_4_last_name',
        'contact_4_email',
        'contact_4_cell',
        'tuition_payer',
        'tuition_statement',
        'photo_publication',
    ];
}
