<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

use App\Models\Company;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Address;
use App\Models\Contact;
use App\Models\ContactNote;
use App\Models\Enquiry;
use App\Models\Team;
use App\Models\JobCategories;
use App\Models\ReferralType;
use App\Models\Task;
use App\Models\Job;
use App\Models\Invoice;


class ContactController extends Controller
{
    public function index()
    {
        $companies=Company::all();
        $categories=Category::all();
        $contacts=Contact::with(['company','category','address'])->get();
        return view('contacts.contact_list',['contacts'=>$contacts,'companies'=>$companies,'categories'=>$categories]);
    }

    public function companyWiseContact($id)
    {

        $companies=Company::all();
        $categories=Category::all();
        $contacts=Contact::with(['company','category','address'])->where('company_id',$id)->get();
        return view('contacts.contact_list',['contacts'=>$contacts,'companies'=>$companies,'categories'=>$categories]);
    }

    public function categoryWiseContact($id)
    {

        $companies=Company::all();
        $categories=Category::all();
        $contacts=Contact::with(['company','category','address'])->where('category_id',$id)->get();
        return view('contacts.contact_list',['contacts'=>$contacts,'companies'=>$companies,'categories'=>$categories]);
    }

    public function addContact()
    {
        $companies=Company::all();
        $categories=Category::all();
        $subcategories=SubCategory::all();
        $referraltypes=ReferralType::all();
        return view('contacts.add_contact',['companies'=>$companies,'categories'=>$categories,'subcategories'=>$subcategories, 'referraltypes'=>$referraltypes]);
    }

    public function addContactSubmit(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email1' =>'required|email',
            'contact_number' =>'required |numeric',
            ]);
         $data=$request->except('_token');
         $data['dob']=date('Y-m-d',strtotime($request->dob));

         $contact=Contact::create($data);
         Enquiry::where('id',$data['enquiry_id'])->update(['isDeleted'=>0]);

         Address::create(['contact_id'=>$contact->id, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['pincode']]);

         return redirect('contacts')->with('success','Contact added successfully!');
    }

    public function editContact($id)
    {
        $companies=Company::all();
        $categories=Category::all();
        $subcategories=SubCategory::all();
        $referraltypes=ReferralType::all();
        $contact=Contact::with(['company','category','address'])->where('id',$id)->first();
        return view('contacts.edit_contact',['companies'=>$companies,'contact'=>$contact,'categories'=>$categories,'subcategories'=>$subcategories, 'referraltypes'=>$referraltypes]);
    }

    public function editContactSubmit(Request $request,$id)
    {
        $request->validate([
            'name' =>'required',
            'email1' =>'required|email',
            'contact_number' =>'required |numeric',
             ]);
         $data=$request->except('_token');
         $addr=Address::where('contact_id',$id)->first();
         if($addr!=null)
         {
            Address::where('contact_id',$id)->update(['line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['pincode']]);
         }else{
            Address::create(['contact_id'=>$id, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['pincode']]);

         }
         unset($data['line1']);
         unset($data['line2']);
         unset($data['line3']);
         unset($data['country']);
         unset($data['state']);
         unset($data['city']);
         unset($data['pincode']);
         $data['dob']=date('Y-m-d',strtotime($request->dob));
         $contact=Contact::where('id',$id)->update($data);



         return redirect('contacts')->with('success','Contact edited successfully!');
    }



    public function contactDelete($id)
    {
        Contact::where('id',$id)->delete();
        return redirect('contacts')->with('success','Contacts added successfully!');
    }


    public function getAddressData($postcode)
    {
        //$post_code="LS122EJ";
        $url1='https://maps.googleapis.com/maps/api/geocode/json?address=' . $postcode . '&key=AIzaSyBX3lodV8krCjDf-4Vub4OfWeLm_kP5-UE&region=GB';
        $response1 = Http::get($url1);
        $data=json_decode($response1->body(),true);
        $addrArray=$data['results'][0]['address_components'];
        $addrLine1=$addrArray[1]['long_name'];
        //dd($addrArray);
        $city=$addrArray[2]['long_name'];
        $state=$addrArray[3]['long_name'];
        echo $addrLine1.'<~>'.$city.'<~>'.$state;

    }

    public function viewContact($id)
    {
        $companies=Company::all();

        $teams=Team::all();
        $jobcategories=JobCategories::all();

        $contact=Contact::with(['company','category','address'])->where('id',$id)->first();
        $notesdata=ContactNote::where('contact_id',$id)->get();
        $contasks=Task::where('contact_id',$id)->where('en_contact','Contact')->get();

        $jobs=Job::with('category')->where('contact_id',$id)->get();



        $quotes=Invoice::with(['invoicetype'])->where('contact_id',$id)->get();

        return view('contacts.view_contact',['teams'=>$teams,'jobcategories'=>$jobcategories,'contact'=>$contact,'notesdata'=>$notesdata,'contasks'=>$contasks,'jobs'=>$jobs,'quotes'=>$quotes]);
    }



    public function addContactNote(Request $request)
    {
        $data=$request->except('_token');
        ContactNote::create($data);

        return redirect('view-contact/'.$data['contact_id'])->with('success','Note added successfully@');

    }

    public function deleteNote($id)
    {
        ContactNote::where('id',$id)->delete();

        return redirect('contacts')->with('success','Contact Note added successfully!');
    }
}
