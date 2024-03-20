<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPackOption extends Model
{
    public $timestamps = false;
    protected $table = 'jobpack_options';

    protected $fillable = [
        'id', 'option_name','cat_name'
    ];
}
