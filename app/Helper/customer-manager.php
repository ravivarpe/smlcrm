<?php
namespace App\Helper;

use App\Models\Invoice;


class CustomerManager
{

    public static function invoicesByType($invoiceTypeId,$contactId)
    {
        return Invoice::with(['invoicetype'])->where('type_id',$invoiceTypeId)->where('contact_id',$contactId)->get();
    }


}
