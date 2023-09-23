<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DepartmentController extends Controller
{
    public function index(){
        // $users = User::select('id','name','email')->get();
        $users = DB::table('users')->select('id','name', 'email')->get();
        $columns = Schema::getColumnListing('users');
        return view('departments.index')->with([
            'users'=>$users,
            'columns'=>$columns,
        ]);
    }
    public function create(){
        return view('departments.create');
    }
    public function store(Request $request){

            $dpartment = new Department();
            $dpartment->department_name = $request->input('departmentName');
            $dpartment -> save();
    }

    public function show(){

    }
}
