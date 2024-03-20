<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{

    public $timestamps = false;
    protected $table = 'address';

    protected $fillable = [
        'id', 'contact_id', 'line1', 'line2', 'line3', 'country', 'state', 'city', 'pincode', 'address_type'
    ];


}
