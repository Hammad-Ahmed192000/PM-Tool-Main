<?php

namespace App\Http\Controllers;
use App\Models\Companies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class CompanyController extends Controller
{
    public function index(){
       $page_title='Companies';
       $companies=Companies::all();
       return view('companies.index', compact('companies','page_title'));
    }
    public function view(){
        $page_title = 'Add Company';
        return view('companies.addCompany', compact('page_title'));
    }

    public function store(Request $request){
       $companies = new Companies;
       $companies->name = $request->companyName;
       $companies->orgNo = $request->orgNo;
       $companies->email = $request->email;
       $companies->address = $request->address;
       $companies->invoice = $request->invoice;
       $companies->phone = $request->phone;
       $companies->type = $request->type;
       $data = $companies->toArray();

       $tableName = $companies->getTable();
        $companyId = \DB::table($tableName)->insertGetId($data);
        if($companyId){
                $owner =  new User;
                $name = explode(' ',$request->customerName);
            
                $owner->fname = $name[0];
                if(isset($name[1])){
                    $owner->lname = $name[1];
                }
                $role=DB::table('roles')->where('role','owner')->first();
                $owner->role_id = $role->id;
                $owner->companyId =$companyId;
                $owner->email = $request->customerEmail;
                // $owner->address = $request->customerAddress;
                $owner->phone = $request->customerPhone;
                $owner->status = 'active';
                $owner->save();
                // echo '<pre>';
                // print_r($owner);exit;
                return redirect()->route('CompaniesList')->with('success','Company Added Successfully');
        }else{
            return redirect()->route('CompaniesList')->with('error','Something went wrong');
        
        }
       }
}
