<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Material extends Model
{

    public $timestamps = false;
    protected $table = 'materials';

    protected $fillable = [
        'id', 'title', 'tags', 'descriptions', 'non_consumable', 'quantity', 'minimum_quntity', 'purchase_price', 'sale_price', 'purchase_vat', 'contact', 'indivisuals', 'material_status', 'mcategory_id', 'company_id', 'mpicture'
    ];

    public function category()
    {
        return $this->hasOne(MaterialCategory::class,'id','mcategory_id');
    }
    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }


}
