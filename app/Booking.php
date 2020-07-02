<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'pg_name', 'payment_status','total_amt', 'name', 'contact', 'email', 'add_line1', 'add_line2', 'zip', 'city', 'state',
    ];

    protected $table = 'booking';
}

