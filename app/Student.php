<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'stud_fname_field',
        'stud_lname_field',
        'stud_gender_field',
        'stud_grade_field',
        'stud_birth_field',
        'stud_bplace_field',
        'stud_address_field',
        'par_name_field',
        'par_contact_field',
        'par_address_field',
        'par_email_field',
    ];

    public $timestamp = true;
}
