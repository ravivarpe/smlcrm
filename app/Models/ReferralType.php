<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ReferralType extends Model
{

    public $timestamps = false;
    protected $table = 'referal_type';

    protected $fillable = [
        'id',
        'name',
    ];


}
