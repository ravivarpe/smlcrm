<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategories extends Model
{
    public $timestamps = false;
        protected $table ='job_categories';

        protected $fillable = [
            'id', 'name'
        ];
}
