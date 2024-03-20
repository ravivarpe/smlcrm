<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SubCategory extends Model
{

    public $timestamps = false;
    protected $table = 'sub_category';

    protected $fillable = [
        'id',
        'category_id',
        'sub_category_name'
    ];


}
