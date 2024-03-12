<?php
namespace App\Helper;

use App\Models\Invoice;

use App\Models\Job;
class CustomerManager
{

    public static function invoicesByType($invoiceTypeId,$contactId)
    {
        return Invoice::with(['invoicetype'])->where('type_id',$invoiceTypeId)->where('contact_id',$contactId)->get();
    }

    public static function jobByInvoice($invoiceId)
    {
        return Job::where('invoice_id',$invoiceId)->first();
    }





}
