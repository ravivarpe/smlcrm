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
use App\Models\Team;
use App\Models\JobPackOption;
use App\Models\JobPack;
use App\Models\JobPackDetail;
use Illuminate\Support\Facades\Auth;
use PDF;


class InvoiceController extends Controller
{
    public function index()
    {
        $invoices=Invoice::with(['contact'])->get();
        return view('invoice.invoice_list',['invoices'=>$invoices]);
    }
    public function addInvoice($contactId=null,$typeId=null)
    {
        $contact=null;
        $companies=Company::all();
        $invoiceTypes=InvoiceType::all();

        if($contactId!=null)
        {
            $contact=Contact::where('id',$contactId)->first();
        }
        return view('invoice.add_invoice',['companies'=>$companies,'invoiceTypes'=>$invoiceTypes,'defContact'=>$contact,'typeId'=>$typeId]);
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

         $data1=['job_cat_id'=>1, 'contact_id'=>$contactId, 'team_id'=>13, 'job_title'=>'job by'.$data['contact_name'],  'jobdescription'=>$data['job_description'], 'start_date'=>date('Y-m-d'),'end_date'=>date('Y-m-d'),  'responsible'=>Auth::user()->id,  'plan_calendar'=>0, 'resin_cust'=>0, 'job_value'=>$data['total_price'], 'tip_stone_side'=>1, 'status'=>'Pending', 'company_id'=>$data['company_id'],'status_two'=>'Quoted','invoice_id'=>$invoice->id];
         $job=Job::create($data1);

      //  return redirect('view-contact/'.$contactId)->with('success','Invoice added successfully!');
         return redirect('view-job-details/'.$job->id)->with('success','Invoice added successfully!');
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

    public function viewInvoicePdf($id=1)
    {

        $invoice=Invoice::with('invoicetype')->where('id',$id)->first()->toArray();
        $invoiceDetails=InvoiceDetail::with('material')->where('invoice_id',$id)->get()->toArray();

        $contact=Contact::where('id',$invoice['contact_id'])->first()->toArray();
        $homeAddr=Address::where('contact_id',$invoice['contact_id'])->where('address_type',"Home")->first()->toArray();
        $deliveryAddr=Address::where('contact_id',$invoice['contact_id'])->where('address_type',"Delivery")->first()->toArray();

      //  $jobDetails=Job::where('id',$invoice->job_id)->first();
      //  $jobImages=JobImage::where('job_id',$invoice->job_id)->get();


      $pdf = PDF::loadView('invoice.viewinvoicepdf', compact('invoice', 'invoiceDetails','contact','homeAddr','deliveryAddr'));
      return $pdf->download('invoice.pdf');
//    return view('invoice.viewinvoicepdf',['invoice'=>$invoice,'invoiceDetails'=>$invoiceDetails,'contact'=>$contact,'homeAddr'=>$homeAddr,'deliveryAddr'=>$deliveryAddr]);

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
        $jobDetails=Job::where('id',$id)->first();
        $invoice=Invoice::where('id',$jobDetails->invoice_id)->first();
        $invoiceDetails=InvoiceDetail::with('material')->where('invoice_id',$invoice->id)->get();

        $contact=Contact::where('id',$invoice->contact_id)->first();
        $homeAddr=Address::where('contact_id',$invoice->contact_id)->where('address_type',"Home")->first();
        $deliveryAddr=Address::where('contact_id',$invoice->contact_id)->where('address_type',"Delivery")->first();


        $jobImages=JobImage::where('job_id',$id)->get();

        $teams=Team::all();

        $undergroundHz=JobPackOption::where('cat_name','underground')->get();
        $overheadHz=JobPackOption::where('cat_name','overhead')->get();
        $otherHz=JobPackOption::where('cat_name','otherhazard')->get();
        $accStorage=JobPackOption::where('cat_name','accstorage')->get();
        $jobWorks=JobPackOption::where('cat_name','jobwork')->get();


        return view('invoice.view_job_packdetails',['invoice'=>$invoice,'invoiceDetails'=>$invoiceDetails,'contact'=>$contact,'homeAddr'=>$homeAddr,'deliveryAddr'=>$deliveryAddr,'jobDetails'=>$jobDetails,'jobImages'=>$jobImages,'teams'=>$teams,'undergroundHz'=>$undergroundHz,'overheadHz'=>$overheadHz,'otherHz'=>$otherHz,'accStorage'=>$accStorage,'jobWorks'=>$jobWorks]);
    }

    public function storeJobPack(Request $request)
    {

       // dd($request->all());
        $data=$request->except('_token');

        $jobPack=JobPack::create($data);

        $ughazardids=$data['ughazardid'];
        $ughzopt=$data['ughzopt'];
        $ugDes=$data['ugDes'];

        $ovhazardid=$data['ovhazardid'];
        $ovhzopt=$data['ovhzopt'];
        $ovDes=$data['ovDes'];

        $othazardid=$data['othazardid'];
        $othzopt=$data['othzopt'];
        $otDes=$data['otDes'];

        $acsthazardid=$data['acsthazardid'];
        $acsthzopt=$data['acsthzopt'];
        $acstDes=$data['acstDes'];

        $jwhazardid=$data['jwhazardid'];
        $jwhzopt=$data['jwhzopt'];

        foreach($ughzopt as $key=>$v)
        {

            JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$key, 'opt_val'=>$v[0] ,'jp_desc'=>$ugDes[$key][0] , 'isvideo'=>'0']);

        }

        foreach($ovhzopt as $key=>$v)
        {
            JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$key, 'opt_val'=>$v[0] ,'jp_desc'=>$ovDes[$key][0] , 'isvideo'=>'0']);
        }

        foreach($othzopt as $key=>$v)
        {
            JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$key, 'opt_val'=>$v[0] ,'jp_desc'=>$otDes[$key][0] , 'isvideo'=>'0']);
        }

        foreach($acsthzopt as $key=>$v)
        {
            JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$key, 'opt_val'=>$v[0] ,'jp_desc'=>$acstDes[$key][0] , 'isvideo'=>'0']);
        }

        foreach($jwhzopt as $key=>$v)
        {
            JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$key, 'opt_val'=>$v[0] ,'jp_desc'=>'' , 'isvideo'=>'0']);
        }


        // for($i=0;$i<count($ughzopt);$i++)
        // {
        //     JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$ughazardids[$i] , 'opt_val'=>$ughzopt[$i] ,'jp_desc'=>$ugDes[$i] , 'isvideo'=>'0']);
        // }

        // for($i=0;$i<count($ovhazardid);$i++)
        // {
        //     JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$ovhazardid[$i] , 'opt_val'=>$ovhzopt[$i] ,'jp_desc'=>$ovDes[$i] , 'isvideo'=>'0']);
        // }

        // for($i=0;$i<count($othazardid);$i++)
        // {
        //     JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$othazardid[$i] , 'opt_val'=>$othzopt[$i] ,'jp_desc'=>$otDes[$i] , 'isvideo'=>'0']);
        // }

        // for($i=0;$i<count($acsthazardid);$i++)
        // {
        //     JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$acsthazardid[$i] , 'opt_val'=>$acsthzopt[$i] ,'jp_desc'=>$acstDes[$i] , 'isvideo'=>'0']);
        // }
        // for($i=0;$i<count($jwhazardid);$i++)
        // {
        //     JobPackDetail::create(['job_pack_id'=>$jobPack->id,'jp_option_id'=>$jwhazardid[$i] , 'opt_val'=>$jwhzopt[$i]]);
        // }


        return redirect('view-job-details/'.$request->job_id);
    }

    public function showJobPackPdf($id)
    {

        $jobPack=JobPack::with(['job'])->where('id',$id)->first()->toArray();
        $invoice=Invoice::where('id',$jobPack['invoice_id'])->first()->toArray();
        $invoiceDetails=InvoiceDetail::with('material')->where('invoice_id',$invoice['id'])->get()->toArray();

        $contact=Contact::where('id',$invoice['contact_id'])->first()->toArray();
        $homeAddr=Address::where('contact_id',$invoice['contact_id'])->where('address_type',"Home")->first()->toArray();
        $deliveryAddr=Address::where('contact_id',$invoice['contact_id'])->where('address_type',"Delivery")->first()->toArray();

        $jobDetails=Job::where('id',$jobPack['job_id'])->first()->toArray();
        $jobImages=JobImage::where('job_id',$jobDetails['id'])->get()->toArray();

        $teams=Team::get()->toArray();
        // return view('invoice.job_pack_pdf',['invoice'=>$invoice,'invoiceDetails'=>$invoiceDetails,'contact'=>$contact,'homeAddr'=>$homeAddr,'deliveryAddr'=>$deliveryAddr,'jobDetails'=>$jobDetails,'jobImages'=>$jobImages,'teams'=>$teams]);

        $undergroundHz=JobPackOption::where('cat_name','underground')->get()->toArray();
        $overheadHz=JobPackOption::where('cat_name','overhead')->get()->toArray();
        $otherHz=JobPackOption::where('cat_name','otherhazard')->get()->toArray();
        $accStorage=JobPackOption::where('cat_name','accstorage')->get()->toArray();
        $jobWorks=JobPackOption::where('cat_name','jobwork')->get()->toArray();

        $jpDetails=JobPackDetail::with(['jpoption'])->where('job_pack_id',$jobPack['id'])->get()->toArray();

        $pdf = PDF::loadView('invoice.job_pack_pdf', compact('invoice', 'invoiceDetails','contact','homeAddr','deliveryAddr','jobImages','jobDetails','teams','undergroundHz','overheadHz','otherHz','accStorage','jobWorks','jpDetails','jobPack'));
        set_time_limit(300);
        return $pdf->download('jobpack.pdf');

    }


    public function showPlannerJobPackPdf($id)
    {

        $jobPack=JobPack::with(['job'])->where('id',$id)->first()->toArray();
        $invoice=Invoice::where('id',$jobPack['invoice_id'])->first()->toArray();
        $invoiceDetails=InvoiceDetail::with('material')->where('invoice_id',$invoice['id'])->get()->toArray();

        $contact=Contact::where('id',$invoice['contact_id'])->first()->toArray();
        $homeAddr=Address::where('contact_id',$invoice['contact_id'])->where('address_type',"Home")->first()->toArray();
        $deliveryAddr=Address::where('contact_id',$invoice['contact_id'])->where('address_type',"Delivery")->first()->toArray();

        $jobDetails=Job::where('id',$jobPack['job_id'])->first()->toArray();
        $jobImages=JobImage::where('job_id',$jobDetails['id'])->get()->toArray();

        $teams=Team::get()->toArray();
        // return view('invoice.job_pack_pdf',['invoice'=>$invoice,'invoiceDetails'=>$invoiceDetails,'contact'=>$contact,'homeAddr'=>$homeAddr,'deliveryAddr'=>$deliveryAddr,'jobDetails'=>$jobDetails,'jobImages'=>$jobImages,'teams'=>$teams]);

        $undergroundHz=JobPackOption::where('cat_name','underground')->get()->toArray();
        $overheadHz=JobPackOption::where('cat_name','overhead')->get()->toArray();
        $otherHz=JobPackOption::where('cat_name','otherhazard')->get()->toArray();
        $accStorage=JobPackOption::where('cat_name','accstorage')->get()->toArray();
        $jobWorks=JobPackOption::where('cat_name','jobwork')->get()->toArray();

        $jpDetails=JobPackDetail::with(['jpoption'])->where('job_pack_id',$jobPack['id'])->get()->toArray();

        $pdf = PDF::loadView('invoice.job_pack_pdf1', compact('invoice', 'invoiceDetails','contact','homeAddr','deliveryAddr','jobImages','jobDetails','teams','undergroundHz','overheadHz','otherHz','accStorage','jobWorks','jpDetails','jobPack'));
        set_time_limit(300);
        return $pdf->download('jobpack1.pdf');

    }

}
