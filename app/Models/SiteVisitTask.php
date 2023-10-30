<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVisitTask extends Model
{
    public $timestamps = false;
        protected $table ='sitevisittask';

        protected $fillable = [
            'id','task_name', 'start_date', 'end_date', 'discription', 'job_cat_id', 'team_id' ,'status','contact_id','priority','repeatable'];


        public function team()
        {
            return $this->hasOne(User::class,'id','team_id');
        }
        public function jobcategories()
        {
            return $this->hasOne(JobCategories::class,'id','job_cat_id');
        }
}
