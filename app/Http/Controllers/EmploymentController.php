<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employment.index') ;
           }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this ->validate ($request, array( 
                        'company'=>'required | max :100'
                        ,'job_title'=>'required | max :100'
                        , 'ex_salary'=>'required | max :100'
                         ,'start_date'=>'required|date'
                         ,'end_date'=>'required|date'
                         ,'leave_reason'=>'required|max:100') );

         $employment = new Employment;
         $employment-> company = $request->company;
         $employment-> job_title = $request->job_title;
         $employment-> ex_salary = $request->ex_salary;
         $employment-> start_date = $request->start_date;
         $employment-> end_date = $request->end_date;
         $employment-> leave_reason = $request->leave_reason;

         $employment->save();

         Session::flash ('success', 'The candidate employment form has been successfuly completed!');

         return redirect(/);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show(Employment $employment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employment $employment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employment $employment)
    {
        //
    }
}
