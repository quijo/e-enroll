<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable=[
        'firstname',
        'lastname',
        'gender',
        'course',
        'birthday',
        'birtplace',
        'address',
        'parents_name',
        'parents_contact',
        'parents_address',
        'email',
    ];
}
