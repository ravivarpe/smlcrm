<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Company;
use App\Models\AssetCategory;
use App\Models\AssetSubcat;
use App\Models\Team;


class AssetController extends Controller
{
    public function index()
    {
        $assets=Asset::with(['company','team','category'])->get();
        $companies=Company::all();
        return view('asset.asset_list',['assets'=>$assets, 'companies'=>$companies]);
    }

    public function companyWiseAssets($companyId){

        $assets=Asset::with(['company','team','category'])->where('company_id',$companyId)->get();
        $companies=Company::all();
        return view('asset.asset_list',['assets'=>$assets, 'companies'=>$companies]);
     }

    public function addAsset()
    {

        $companies=Company::all();
        $categories=AssetCategory::all();
        $subcategories=AssetSubcat::all();
        $teams=Team::all();
        return view('asset.add_asset',['companies'=>$companies,'categories'=>$categories, 'subcategories'=>$subcategories,'teams'=>$teams]);
    }

    public function addAssetSubmit(Request $request)
    {
        $request->validate([
            'category_id'         => 'required',
            'subcat_id'           => 'required',
            'company_id'          => 'required',
            'asset_type'          => 'required',
            'asset_name'          => 'required',
            'asset_value'         => 'required',
            'purchase_date'       => 'required',
            'service_required'    => 'required',
            'service_date'        => 'required',

        ]);

        $data=$request->except('_token');


        $data['purchase_date']=date('Y-m-d',strtotime($data['purchase_date']));
        $data['service_date']=date('Y-m-d',strtotime($data['service_date']));

         $assets=Asset::create($data);
         $image="";
            if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $image = time()."_".uniqid().".".$request->file('image')->getClientOriginalExtension();
            $imageFile->move(public_path('/uploads/assetimages'),$image);
            }

        Asset::where('id',$assets->id)->update(['image'=>$image]);

       return redirect('asset')->with('success','Asset added successfully!');
    }

    public function editAsset($id)
    {
        $companies=Company::all();
        $categories=AssetCategory::all();
        $subcategories=AssetSubcat::all();
        $teams=Team::all();

        $asset=Asset::with(['company','team','category'])->where('id',$id)->first();

        return view('asset.edit_asset',['companies'=>$companies,'categories'=>$categories, 'subcategories'=>$subcategories,'teams'=>$teams,'asset'=>$asset]);
    }

    public function editAssetSubmit(Request $request,$id)
    {
        $request->validate([
            'category_id' => 'required',
            'subcat_id'   => 'required',
            'company_id'   => 'required',
            'asset_type'   => 'required',
            'asset_name'   => 'required',
            'asset_value'  => 'required',
            'purchase_date' => 'required',
            'service_date'  => 'required',

        ]);

        $data=$request->except('_token');


        $data['purchase_date']=date('Y-m-d',strtotime($data['purchase_date']));
        $data['service_date']=date('Y-m-d',strtotime($data['service_date']));

         $assets=Asset::where('id',$id)->update($data);
         $image="";
            if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $image = time()."_".uniqid().".".$request->file('image')->getClientOriginalExtension();
            $imageFile->move(public_path('/uploads/assetimages'),$image);
            }

        Asset::where('id',$id)->update(['image'=>$image]);

       return redirect('asset')->with('success','Asset added successfully!');
    }

    public function deleteAsset(Request $request)
    {
        Asset::where('id',$request->id)->delete();
        return redirect('asset')->with('success','Asset deleted successfully!');
    }








}
