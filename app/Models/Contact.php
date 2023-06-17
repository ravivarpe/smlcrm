<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{

    public $timestamps = false;
    protected $table = 'contacts';

    protected $fillable = [
        'id', 'company_id', 'category_id', 'sub_category_id', 'contact_number', 'mobile', 'email1', 'email2', 'website', 'vat_no', 'twitter_handle', 'facebook_handle', 'google_handle', 'skype_handle', 'email_subscription', 'profile_photo', 'added_date','description','dob','referance_from','name'
    ];

    public function address()
    {
        return $this->hasOne(Address::class,'contact_id','id');
    }

    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }


}
