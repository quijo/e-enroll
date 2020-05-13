<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
                        // table name
    protected $table = "payments";
    protected $fillable=[
        //table field name
        'Name',
        'Amount',
        'Upload'
    ];



  
}
