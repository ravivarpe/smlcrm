<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ContactNote extends Model
{

    public $timestamps = false;
    protected $table = 'contact_notes';

    protected $fillable = [
        'id', 'contact_id', 'notes'
    ];




}
