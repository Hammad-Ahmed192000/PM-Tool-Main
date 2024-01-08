<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $page_title="Users List";
        $side_param = 'user';
        $role_id =DB::table('roles')->where('role','Owner')->first();
        $users=User::whereNotIn('role_id', [$role_id->id])->get();
        return view('users.index',compact('page_title','users','side_param'));
    }
    public function view(){
        $page_title="Add User";
        $side_param = 'user';
        return view('users.addUsers',compact('page_title','side_param'));
    }
    public function store(Request $request){
        // echo'<pre>';
        // print_r($request->all());exit;
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->companyId = $request->companyId;
        $user->role_id= $request->role;
        $user->status = $request->status;
        $result=$user->save();
        if($result){
            return redirect()->route('usersList')->with('success','User Added Successfully');
        }else{
            return redirect()->route('usersList')->with('error','Something went wrong');
        }
    }
}


