<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    public $timestamps = false;
    protected $table = 'invoice_details';

    protected $fillable = [
        'id', 'invoice_id', 'quantity', 'material_id', 'details', 'price', 'price_unit', 'period', 'period_unit', 'total'
    ];
}
