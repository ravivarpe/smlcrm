<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StaffAddress extends Model
{

    public $timestamps = false;
    protected $table = 'staff_address';

    protected $fillable = [
        'id', 'staff_id', 'line1', 'line2', 'line3', 'country', 'state', 'city', 'pincode'
    ];


}
