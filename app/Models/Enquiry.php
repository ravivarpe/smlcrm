<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Enquiry extends Model
{

    public $timestamps = false;
    protected $table = 'enquiries';

    protected $fillable = [
        'id', 'name', 'phone', 'email', 'post_code', 'added_date', 'enquiry_form', 'note', 'status','company_id','isDeleted'
    ];

    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }


}
