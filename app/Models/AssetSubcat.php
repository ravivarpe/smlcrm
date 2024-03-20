<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AssetSubcat extends Model
{

    public $timestamps = false;
    protected $table = 'asset_subcat';

    protected $fillable = [
        'id',
        'category_id',
        'name',
    ];


}
