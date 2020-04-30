<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
                        // table name
    protected $table = "payments";
    protected $fillable=[
        //table field name
        'payment_name_field',
        'payment_amount_field',
        'payment_receipt_upload_field'
    ];
}
