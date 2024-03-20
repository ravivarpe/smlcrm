<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CalendarCategory extends Model
{

    public $timestamps = false;
    protected $table = 'calender_category';

    protected $fillable = [
        'id',
        'name',
    ];


}
