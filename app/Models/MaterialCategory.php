<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MaterialCategory extends Model
{

    public $timestamps = false;
    protected $table = 'materials_category';

    protected $fillable = [
        'id',
        'name',
    ];


}
