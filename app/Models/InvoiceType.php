<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceType extends Model
{
    public $timestamps = false;
    protected $table = 'invoice_types';

    protected $fillable = [
        'id', 'type_name'
    ];
}
