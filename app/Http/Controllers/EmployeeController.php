<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Candidate;
use Session;

class EmployeeController extends Controller
{
     public function __construct(){
        $this ->middleware ('auth:admin') ;  // Limit the featured of this controller to logged in users you may add (except or only is an array)
    }
    public function index()
    {
         $employees = Employee::orderBy('id','desc')->paginate(10);
        return view ('employee.index')->with('employees',$employees);
    }

   public function search(){

        $search = \Request::get('search');
        $employees = Candidate::where('name','like','%'.$search.'%')->orderBy('id')->paginate(5); 
        return view ('employee.index')->withemployees($employees);
   }


    public function create($id)
    {
        $candidate= Candidate::find($id);
        return view ('employee.create')->with ('candidate',$candidate);
    }

   
    public function store(Request $request,$id)
    {
         $this ->validate ($request, array(
                        'staff_number'=>'required'
                        'name' => 'required | max:255' ,
                        'position_new'=>'required',
                        'salary'=>'required',
                        'outlet'=>'required'));

        $employee = new Employee;
        $employee->candidate_id=$id;
        $employee->staff_number = $request->staff_number;
        $employee->name=$request->name;
        $employee->salary=$request->salary;
        $employee->outlet=$request->outlet;
        $employee->position=$request->position_new;
        $employee->save();

    Session::flash ('success', 'The Employee record has been saved.');
    return redirect()->route ('employee.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
          $employee= Employee::find($id);
         $employee -> delete();
        Session::flash ('success', 'The employee has been successfuly deleted');
        return redirect ()-> route('employee.index');
      }    
}
