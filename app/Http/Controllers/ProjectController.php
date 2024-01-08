<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// use Intervention\Image\Facades\Image;


use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\User;
use App\Models\projectsDrawing;
use App\Models\projectsInvoice;
use App\Models\Companies;


use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function index(){
        $page_title="Projects List";
        $side_param = 'project';
        $projects=projects::all();
        return view('projects.index',compact('page_title','projects','side_param'));
    }
    public function view(){
        $page_title="Add project";
        $side_param = 'project';
        return view('projects.addprojects',compact('page_title','side_param'));
    }
    public function getUsers($companyId){
        $role_id =DB::table('roles')->where('role','Owner')->first();
        $users = User::where('companyId', $companyId)->orderByRaw("role_id = (SELECT id FROM roles WHERE id = ?) DESC", [$role_id->id])
        ->orderBy('role_id', 'desc')
        ->get();
        
        return response()->json($users);
        // dd($request->all());

    }
    public function store(Request $request)
    {
        // echo '<pre>';
        // print_r($request->all());
        // exit;
       
        $project = new projects;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->companyId = $request->companyId;
        $project->exective = $request->projectExective;
        $project->managerId = $request->managerId;
        $project->status= 'active';
        $data = $project->toArray();

        $tableName = $project->getTable();
        $projectId = \DB::table($tableName)->insertGetId($data);
        
         
        // $result = $project->save();
        if($projectId){
            // drawing form 
            // dd($request->floor);
            $drawings = new projectsDrawing;
            $drawings->projectId = $projectId;
            $drawings->title = $request->title;
            $drawings->buildingNo = $request->description;
            $drawings->floor = $request->floor;
            $drawings->subject = $request->subject;
            $drawings->revisionNo = $request->revisionNo;
            $drawings->revisionDate = $request->revisionDate;
            $drawings->yardStick = $request->yardStick;
            $drawings->format = $request->format;
            $drawings->endDate = $request->endDate;
            $drawings->lastEdit = $request->lastEdit;
            $drawings->statusDrawing = $request->statusDrawing;
            $drawings->comment = $request->comment;
            // $company = Companies::Where('id',$companyId)->first(); 
            $company = Companies::Where('id',$request->companyId)->first();   
            $folderPath = "drawings/".$company->name;
            
            if (!Storage::exists($folderPath)) {
                Storage::makeDirectory($folderPath);
            }else{
                $image = $request->file('image');
                $folderPath = 'drawings/Maadi Tech';
                $imageName = $image->getClientOriginalName();
               
                $imageUpload = Storage::putFileAs($folderPath, $image, $imageName);  
                $drawings->drawing=  $imageName;       
            }  
            $drawings->save();

            // invoice details 

            $invoice =  new projectsInvoice();
            $invoice->projectId = $projectId;
            $invoice->startDate = $request->startDate;
            $invoice->endDate = $request->endDate;
            $invoice->statusBuilding =$request->statusBuilding;
            $invoice->statusInvoice = $request->statusInvoice;
            $invoice->save();
            return redirect()->route('ProjectsList')->with('success','Project added successfully');
        }else{
            return redirect()->route('ProjectsList')->with('error','Something went wrong');
        }
    }
    public function documents(){
        $page_title ="Documents List";
        $side_param = 'documents';
        $drawing   = projectsDrawing::all();
        return view('documents.documents',compact('page_title','drawing','side_param'));
    }
}
