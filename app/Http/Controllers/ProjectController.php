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
use App\Models\ProjectsActivity;
use App\Models\projectsTasks;


use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function index(){
        $page_title="Projects List";
        $side_param = 'project';
        $projects = projects::with('activities.tasks')->get();
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
    public function fetchUsers(){
        $role_id = DB::table('roles')->where('role','Owner')->first();
        $users   = User::whereNotIn('role_id', [$role_id->id])->get()->toArray();
        $roles   = DB::table('roles')->where('type','user')->whereNotIn('id', [$role_id->id])->get()->toArray();
        return response()->json(['data' => $users,'roles' => $roles,], 200);
    }
    
   public function store(Request $request)
    {
        foreach (array_combine($request->members, $request->role) as $userId => $roleId) {
            User::where('id', $userId)->update(['role_id' => $roleId]);
        }
       
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
        
        if($projectId){
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

            // Activity details
            // dd($request->activityStartDate);
            $activity = new ProjectsActivity();
            $activity->projectId = $projectId;
            $activity->title = $request->activityTitle;
            $activity->description = $request->description;
            $activity->assignedTo = $request->activityAssignedTo;
            $activity->assignedStatus = $request->activityAssignedStatus;
            $activity->startDate = $request->activityStartDate;
            $activity->endDate = $request->activityEndDate;
            $result = $activity->toArray();

            $activityTableName = $activity->getTable();
            $activityId = \DB::table($activityTableName)->insertGetId($result);
            if($activityId){
                $tasks = new projectsTasks();
                $tasks->activityId = $activityId;
                $tasks->title = $request->activityTitle;
                $tasks->description = $request->description;
                $tasks->assignedTo = $request->activityAssignedTo;
                $tasks->assignedStatus = $request->taskStatus;
                $tasks->startDate = $request->activityStartDate;
                $tasks->endDate = $request->activityEndDate;
                $tasks->save();
            }
           
            
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
    public function details (Request $request){
        
        $page_title="Dynamic Project Listing";
        $side_param = 'projects';
        // echo'<pre>';
        
        $columns = array_keys($request->all());   
        $action = array_filter($columns, function ($key) {
            return $key == 'actionYes';
        });

        $newcolumns = array_filter($columns, function ($key) {
            return $key !== '_token' && $key !== 'actionYes';
        });
        
        $newcolumns = array_map(function ($column) {
            $ownerRole = DB::table('roles')->where('role','Owner')->first();

            if ($column === 'projectNo') {
                return 'projects.id as ProjectNo';
            }
            if ($column === 'name') {
                return 'projects.name as ProjectName';
            }
            if ($column === 'projectManager') {
                return 'projects.managerId as projectManager';
            }
            if ($column === 'projectExective') {
                return 'projects.exective as projectExective';
            }
            if ($column === 'projectDescription') {
                return 'projects.description as projectDescription';
            }
            if ($column === 'companyName') {
                return 'companies.name as CompanyName';
             }
            if($column === 'startDate'){
                return 'project_activity.startDate as StartDate';
            }
            if($column === 'endDate'){
                return 'project_activity.endDate as EndDate';
            }
            if($column === 'projectStatus'){
                return 'project_activity.assignedStatus as ProjectStatus';
            }
            
            if($column === 'activityName'){
                return 'project_activity.title as ActivityName';
            }
            if ($column === 'memberName') {
                return 'CASE WHEN roles.id != ' . $ownerRole->id . ' THEN users.fname ELSE NULL END as member';
            }elseif($column === 'memberRole') {
                return "CASE WHEN roles.id != ' . $ownerRole->id . ' THEN  roles.role END as Role";    
            } 
          
            if($column === 'drawwingName'){
                return 'projects_drawings.title as DrawingTitle ';
            }
            if($column === 'drawingStatus'){
                return 'projects_drawings.statusDrawing as DrawingStatus ';
            }
            if($column === 'invoiceStartDate'){
                return 'projects_invoices.startDate as InvoiceStartDate ';
            }
            if($column === 'invoiceEndDate'){
                return 'projects_invoices.endDate as invoiceEndDate ';
            }
            if($column === 'buildingStatus'){
                return 'projects_invoices.statusBuilding as buildingStatus ';
            }
            if($column === 'invoiceStatus'){
                return 'projects_invoices.statusInvoice as invoiceStatus ';
            }
            return $column;
        }, $newcolumns);
        $newcolumns = array_map(function ($column) {
            return str_replace(['activities.', 'tasks.'], ['activity.', 'task.'], $column);
        }, $newcolumns);
        
        $joinClauses = [
            'projects' => 'projects.id = project_activity.projectId',
            'companies'=>'companies.id = projects.companyId',
            'users'=>'users.companyId = companies.id',
            'roles' => 'roles.id = users.role_id', 
            'projects_tasks' => 'projects_tasks.activityId = project_activity.id',
            'projects_drawings'=>'projects_drawings.projectId = projects.id',
            'projects_invoices'=>'projects_invoices.projectId = projects.id'
            // Add other join clauses as needed for your specific case
        ];
      
        $joinString = implode(' ', array_map(function ($table, $condition) {
            return "LEFT JOIN $table ON $condition";
        }, array_keys($joinClauses), $joinClauses));
        
        $query = "SELECT " . implode(', ', $newcolumns) . " FROM project_activity $joinString ";
        
        $finalcolumns = array_map(function ($column) {
            // Split the column name by dot and get the last part
            $parts = explode('as', $column);
            return end($parts);
        }, $newcolumns);
        $data = DB::select($query);
        // print_r($finalcolumns);exit;
        // echo'<pre>';
        //  print_r($data);exit;
        return view('projects.projectsDynamicList',compact('page_title','data','action','finalcolumns','side_param'));
   

        
    }
}
