<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EnquiryNote extends Model
{

    public $timestamps = false;
    protected $table = 'enquiry_notes';

    protected $fillable = [
        'id', 'enquiry_id', 'notes'
    ];




}
