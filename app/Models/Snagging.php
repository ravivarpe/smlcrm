<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Snagging extends Model
{

    public $timestamps = false;
    protected $table = 'snagging';

    protected $fillable = [
        'id', 'company_id', 'sub_cat_id', 'contact_id', 'title', 'descriptions', 'team_id', 'report_datetime', 'complete_date', 'add_to_cal', 'status','tags'
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id','sub_cat_id');
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

}
