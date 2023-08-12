<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\Address;
use App\Models\Contact;
use App\Models\InvoiceType;
use App\Models\Material;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices=Invoice::all();
        return view('invoice.invoice_list',['invoices'=>$invoices]);
    }
    public function addInvoice()
    {
        $companies=Company::all();
        $invoiceTypes=InvoiceType::all();
        return view('invoice.add_invoice',['companies'=>$companies,'invoiceTypes'=>$invoiceTypes]);
    }

    public function addInvoiceSubmit(Request $request)
    {
         $data=$request->except('_token');
         $invoice=Invoice::create($data);

         Address::create(['contact_id'=>$invoice->id, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['zip']]);

         return redirect('invoice')->with('success','Invoice added successfully!');
    }

    public function editInvoice($id)
    {
        return view('invoice.edit_invoice');
    }

    public function deleteInvoice($id)
    {
        Invoice::where('id',$id)->delete();
        return redirect('invoice')->with('success','Invoice deleted successfully!');
    }

    public function getContact(Request $request)
    {
       $contacts=Contact::select('id','name')->where('name', 'LIKE', "%{$request->term}%")->get();
       foreach($contacts as $contact ){
        $usersArray[] = array(
          "label" => $contact->name,
          "value" => $contact->id
        );
      }
       return response()->json($usersArray);

    }

    public function getMaterial(Request $request)
    {
        $materials=Material::select('id','title')->where('title', 'LIKE', "%{$request->term}%")->get();
        foreach($materials as $material ){
         $materialArray[] = array(
           "label" => $material->title,
           "value" => $material->id
         );
       }
        return response()->json($materialArray);
    }

    public function getContactDetails($id)
    {

    }


    public function viewJobPack()
    {
      return view('invoice.view_job_packdetails');
    }

}
