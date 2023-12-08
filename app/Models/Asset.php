<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Asset extends Model
{

    public $timestamps = false;
    protected $table = 'asset';

    protected $fillable = [
        'id',
        'category_id',
        'team_id',
        'asset_type',
        'asset_name',
        'asset_value',
        'purchase_date',
        'service_required',
        'service_date',
        'set_reminder',
        'additional_details',
        'image',
        'status',
        'company_id',
        'staff_id',
        'regvin','mot','mot_date','contact_id'
    ];

    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }

    public function team()
    {
        return $this->hasOne(Team::class,'id','team_id');
    }

    public function category()
    {
        return $this->hasOne(AssetCategory::class,'id','category_id');
    }

    public function supplier()
    {
        return $this->hasOne(Contact::class,'id','contact_id');
    }

    public function staff()
    {
        return $this->hasOne(User::class,'id','staff_id');
    }

}
