<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model

 {
        public $timestamps = false;
        protected $table ='invoices';

        protected $fillable = [
            'id', 'company_id', 'type_id', 'ref_name', 'job_id', 'contact_id', 'phone', 'tags', 'added_date', 'terms_&_conditions', 'discount', 'total_price', 'price_unit', 'vat', 'show_vat', 'delivery_instruction', 'add_to_cal', 'start_date', 'end_date', 'job_description', 'job_details','delivery_date'
        ];
        public function company()
        {
           return $this->hasOne(Company::class,'id','company_id');
        }
        public function invoicetype()
        {
           return $this->hasOne(InvoiceType::class,'id','type_id');
        }
     public function contact()
     {
         return $this->hasOne(Contact::class,'id','contact_id');
     }

}
