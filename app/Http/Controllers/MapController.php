<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Address;
class MapController extends Controller
{

    public function index()
    {
        $locData=[];
        $companies=Company::all();

        $contacts=Contact::with(['company','category','address'])->get();

        foreach($contacts as $contact)
        {
           if($contact->address!=null)
           {

            $address=$contact->address->line1;
            if($contact->address->line2!=null)
            {
                $address.=','.$contact->address->line2;
            }
            if($contact->address->line3!=null)
            {
                $address.=','.$contact->address->line3;
            }
            $address.=','.$contact->address->pincode;


            $url1='https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&key=AIzaSyBX3lodV8krCjDf-4Vub4OfWeLm_kP5-UE&region=GB';
            $response1 = Http::get($url1);
            $data=json_decode($response1->body(),true);

            if(count($data['results'])>0){
                $addrArray=$data['results'][0]['geometry']['location'];

                $contactData=['id'=>$contact->id,'name'=>$contact->name,'addr'=>$address,'lat'=>$addrArray['lat'],'long'=>$addrArray['lng']];
                 array_push($locData,$contactData);
            }


          }

        }

         //dd($addrArray);


        return view('map.map_list',['companies'=>$companies,'locData'=>$locData]);
    }
}
