<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Job extends Model
{

    public $timestamps = false;
    protected $table = 'jobs';

    protected $fillable = [
        'id', 'job_cat_id', 'contact_id', 'team_id', 'job_title', 'tags', 'jobdescription', 'start_date', 'end_date', 'ref_type', 'responsible', 'priority', 'plan_calendar', 'resin_cust', 'job_value', 'who_see', 'tip_stone_side', 'added_date', 'status', 'individual','company_id','status_two','invoice_id'
    ];

    public function category()
    {
        return $this->hasOne(JobCategories::class,'id','job_cat_id');
    }
    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }

    public function contact()
    {
        return $this->hasOne(Contact::class,'id','contact_id');
    }

    public function team()
    {
        return $this->hasOne(Team::class,'id','team_id');
    }

    public function staff()
    {
        return $this->hasOne(User::class,'id','responsible');
    }


}
