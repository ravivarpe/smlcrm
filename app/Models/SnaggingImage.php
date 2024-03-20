<?php

namespace App\Models;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnaggingImage extends Model
{
    public $timestamps = false;
    protected $table = 'snagging_images';

    protected $fillable = [
        'id', 'snag_id','image_url'
    ];
}

