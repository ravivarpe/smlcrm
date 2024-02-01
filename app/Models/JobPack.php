<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class JobPack extends Model
{
    public $timestamps = false;
    protected $table = 'job_packs';

    protected $fillable = [
        'id', 'contact_id', 'invoice_id', 'job_id', 'job_start_date', 'flexibal', 'flex_desc', 'annual_pc', 'annual_pc_desc', 'payment_method', 'added_date', 'team_id', 'job_start_time', 'job_end_date', 'add_plan_cal', 'final_price', 'adv_amt_taken', 'balance_amt', 'note'
    ];

    public function job()
    {
        return $this->hasOne(Job::class,'id','job_id');
    }
}
