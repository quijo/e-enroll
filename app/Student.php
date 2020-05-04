<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'First_Name',
        'Last_Name',
        'Gender',
        'Grade_Level',
        'Birthday',
        'Birth_Place',
        'Student_Address',
        'Parents_Name',
        'Parents_Contact',
        'Parents_Address',
        'Parents_Email',
    ];

    public $timestamp = true;
}
