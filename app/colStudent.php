<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colStudent extends Model
{
    protected $fillable=[
        'col_stud_fname_field',
        'col_stud_lname_field',
        'col_stud_gender_field',
        'col_stud_course_field',
        'col_stud_birth_field',
        'col_stud_bplace_field',
        'col_stud_address_field',
        'col_par_name_field',
        'col_par_contact_field',
        'col_par_address_field',
        'col_par_email_field',
    ];
}
