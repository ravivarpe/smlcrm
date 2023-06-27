<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = false;
        protected $table ='teams';

        protected $fillable = [
            'id', 'team_name', 'email_id', 'colour_code', 'discription', 'added_date', 'status'
        ];
}
