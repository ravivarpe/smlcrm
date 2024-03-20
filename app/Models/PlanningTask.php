<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanningTask extends Model
{
    public $timestamps = false;
        protected $table ='planning_task';

        protected $fillable = [
            'id','task_name', 'start_date', 'end_date', 'team_id' ,'status','ref_id','task_type','added_date'];


        public function team()
        {
            return $this->hasOne(User::class,'id','team_id');
        }


}
