<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CallLog extends Model
{

    public $timestamps = false;
    protected $table = 'call_log';

    protected $fillable = [
        'id',
        'staff_id',
        'job_id',
        'calllogs'
    ];

    public function job()
    {
        return $this->hasOne(Job::class,'id','job_id');
    }

    public function staff()
    {
        return $this->hasOne(User::class,'id','staff_id');
    }



}
