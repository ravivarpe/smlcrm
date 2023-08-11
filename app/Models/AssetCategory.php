<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AssetCategory extends Model
{

    public $timestamps = false;
    protected $table = 'asset_category';

    protected $fillable = [
        'id',
        'name',
    ];


}
