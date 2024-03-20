<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MaterialSubCategory extends Model
{

    public $timestamps = false;
    protected $table = 'material_subcat';

    protected $fillable = [
        'id',
        'category_id',
        'sub_cat_name',
    ];


}
