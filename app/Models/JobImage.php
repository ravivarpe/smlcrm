<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobImage extends Model
{
    public $timestamps = false;
    protected $table = 'job_images';

    protected $fillable = [
        'id', 'image_name'
    ];
}
