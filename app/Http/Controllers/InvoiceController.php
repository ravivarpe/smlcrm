<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Address;
use App\Models\Contact;
use App\Models\InvoiceType;
use App\Models\Material;
use App\Models\Job;
use App\Models\JobImage;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices=Invoice::with(['contact'])->get();
        return view('invoice.invoice_list',['invoices'=>$invoices]);
    }
    public function addInvoice($contactId=null)
    {
        $companies=Company::all();
        $invoiceTypes=InvoiceType::all();
        if($contactId!=null)
        {
            $contact=Contact::where('id',$contactId)->first();
        }
        return view('invoice.add_invoice',['companies'=>$companies,'invoiceTypes'=>$invoiceTypes,'defContact'=>$contact]);
    }

    public function addInvoiceSubmit(Request $request)
    {
         $data=$request->except('_token');

         if($data['end_date']!=null && $data['start_date']!=null)
         {
            $data['start_date']=date('Y-m-d H:i:s',strtotime($data['start_date']));
            $data['end_date']=date('Y-m-d H:i:s',strtotime($data['end_date']));
         }

         if($data['delivery_date']!=null)
         {
            $data['delivery_date']=date('Y-m-d H:i:s',strtotime($data['delivery_date']));
         }

         $invoice=Invoice::create($data);

         $quantity=$data['quantity'];
         $price=$data['price'];
         $priceUnit=$data['priceunit'];
         $duration=$data['duration'];
         $durationUnit=$data['durationunit'];
         $materialIds=$data['materialId'];
         $totals=$data['rowTotal'];

         for($i=0;$i< count($materialIds);$i++){
            InvoiceDetail::create(['invoice_id'=>$invoice->id,'quantity'=>$quantity[$i],'material_id'=>$materialIds[$i],'price'=>$price[$i],'price_unit'=>$priceUnit[$i],'period'=>$duration[$i],'period_unit'=>$durationUnit[$i],"total"=>$totals[$i]]);
         }

         $contactId=$data['contact_id'];

         $contact=Address::where('contact_id',$contactId)->where('address_type',"Home")->first();
         if($contact==null)
         {
            Address::create(['contact_id'=>$contactId, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['zip'],'address_type'=>'Home']);
         }

         $contact=Address::where('contact_id',$contactId)->where('address_type',"Delivery")->first();
         if($contact==null)
         {
            Address::create(['contact_id'=>$contactId, 'line1'=>$data['delivery_addr_line1'], 'line2'=>$data['delivery_addr_line2'], 'line3'=>$data['delivery_addr_line3'], 'country'=>$data['delivery_addr_country'], 'state'=>$data['delivery_addr_state'], 'city'=>$data['delivery_addr_city'], 'pincode'=>$data['delivery_addr_zip'],'address_type'=>'Delivery']);
         }

         return redirect('invoice')->with('success','Invoice added successfully!');
    }

    public function editInvoice($id)
    {

        $companies=Company::all();
        $invoiceTypes=InvoiceType::all();

        $invoice = Invoice::with(['contact'])->where('id',$id)->first();
        $invoiceDetails=InvoiceDetail::with(['material'])->where('invoice_id',$id)->get();

        return view('invoice.edit_invoice',['companies'=>$companies,'invoiceTypes'=>$invoiceTypes,'invoice'=>$invoice,'invoiceDetails'=>$invoiceDetails]);
    }

    public function editInvoiceSubmit(Request $request,$id)
    {
         $data=$request->except('_token');

         if($data['end_date']!=null && $data['start_date']!=null)
         {
            $data['start_date']=date('Y-m-d H:i:s',strtotime($data['start_date']));
            $data['end_date']=date('Y-m-d H:i:s',strtotime($data['end_date']));
         }

         if($data['delivery_date']!=null)
         {
            $data['delivery_date']=date('Y-m-d H:i:s',strtotime($data['delivery_date']));
         }



         $quantity=$data['quantity'];
         $price=$data['price'];
         $priceUnit=$data['priceunit'];
         $duration=$data['duration'];
         $durationUnit=$data['durationunit'];
         $materialIds=$data['materialId'];
         $totals=$data['rowTotal'];

         for($i=0;$i< count($materialIds);$i++){
            InvoiceDetail::create(['invoice_id'=>$id,'quantity'=>$quantity[$i],'material_id'=>$materialIds[$i],'price'=>$price[$i],'price_unit'=>$priceUnit[$i],'period'=>$duration[$i],'period_unit'=>$durationUnit[$i],"total"=>$totals[$i]]);
         }

         $contactId=$data['contact_id'];

         $contact=Address::where('contact_id',$contactId)->where('address_type',"Home")->first();
         if($contact==null)
         {
            Address::create(['contact_id'=>$contactId, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['zip'],'address_type'=>'Home']);
         }

         $contact=Address::where('contact_id',$contactId)->where('address_type',"Delivery")->first();
         if($contact==null)
         {
            Address::create(['contact_id'=>$contactId, 'line1'=>$data['delivery_addr_line1'], 'line2'=>$data['delivery_addr_line2'], 'line3'=>$data['delivery_addr_line3'], 'country'=>$data['delivery_addr_country'], 'state'=>$data['delivery_addr_state'], 'city'=>$data['delivery_addr_city'], 'pincode'=>$data['delivery_addr_zip'],'address_type'=>'Delivery']);
         }

         $invoice=Invoice::where('id',$id)->update($data);

         return redirect('invoice')->with('success','Invoice updated successfully!');
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
        $materials=Material::select('id','title')->where('title', 'LIKE', "%{$request->searchText}%")->get();
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

       $contact=Contact::where('id',$id)->first();
       $address=Address::where('contact_id',$id)->first();
       $result=[
        'contact_number'=>$contact->contact_number, 'mobile'=>$contact->mobile, 'email1'=>$contact->email1, 'email2'=>$contact->email2,
        'line1'=>$address->line1,
        'line2'=>$address->line2, 'line3'=>$address->line3, 'country'=>$address->country, 'state'=>$address->state,
        'city'=>$address->city, 'pincode'=>$address->pincode

       ];
       return response()->json($result);
    }

    public function getJob(Request $request)
    {

       $jobs=Job::select('id','job_title')->where('job_title', 'LIKE', "%{$request->term}%")->get();
       foreach($jobs as $job ){
        $usersArray[] = array(
          "label" => $job->job_title,
          "value" => $job->id
        );
      }
       return response()->json($usersArray);


    }

    public function getMaterialDetails($id)
    {
        $material=Material::where('id',$id)->first();
        $result=[
         'descriptions'=>$material->descriptions,
         'sale_price'=>$material->sale_price,

        ];
        return response()->json($result);
    }


    public function viewJobPack($id)
    {
        $invoice=Invoice::where('id',$id)->first();
        $invoiceDetails=InvoiceDetail::with('material')->where('invoice_id',$id)->get();

        $contact=Contact::where('id',$invoice->contact_id)->first();
        $homeAddr=Address::where('contact_id',$invoice->contact_id)->where('address_type',"Home")->first();
        $deliveryAddr=Address::where('contact_id',$invoice->contact_id)->where('address_type',"Delivery")->first();

        $jobDetails=Job::where('id',$invoice->job_id)->first();
        $jobImages=JobImage::where('job_id',$invoice->job_id)->get();

        return view('invoice.view_job_packdetails',['invoice'=>$invoice,'invoiceDetails'=>$invoiceDetails,'contact'=>$contact,'homeAddr'=>$homeAddr,'deliveryAddr'=>$deliveryAddr,'jobDetails'=>$jobDetails,'jobImages'=>$jobImages]);
    }

}
