<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\Address;
use App\Models\Contact;
use App\Models\InvoiceType;

class InvoiceController extends Controller
{
    public function index()
    {

        return view('invoice.invoice_list');
    }
    public function addEnvoice()
    {
        $companies=Company::all();
        $invoiceTypes=InvoiceType::all();

        return view('invoice.add_invoice',['companies'=>$companies,'invoiceTypes'=>$invoiceTypes]);
    }

    public function addInvoiceSubmit(Request $request)
    {
         $data=$request->except('_token');
         $invoice=Invoice::create($data);
        // Invoice::create($data);

         Address::create(['contact_id'=>$invoice->id, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['zip']]);

         return redirect('invoice')->with('success','Invoice added successfully!');
    }



    public function editEnvoice()
    {
        return view('invoice.edit_invoice');
    }

}
