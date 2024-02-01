<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class JobPackDetail extends Model
{
    public $timestamps = false;
    protected $table = 'jobpack_details';

    protected $fillable = [
        'id', 'job_pack_id','jp_option_id','opt_val','isvideo'
    ];
}
