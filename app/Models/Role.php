<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{

    public $timestamps = false;
    protected $table = 'staff_roles';

    protected $fillable = [
        'id',
        'role_name',
        'module_access',
    ];


}
