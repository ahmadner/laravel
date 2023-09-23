<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return view('employees.index');
    }

    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        $employee = new Employee();

        $employee->first_name = $request->input('firstName');
        $employee->last_name = $request->input('lastName');
        $employee->phone_number = $request->input('phoneNumber');
        $employee->gender = $request->input('gender');
        // $employee->user_id = $request->input('userID');
        $employee->save();
    }
}
