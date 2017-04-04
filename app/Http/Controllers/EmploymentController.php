<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Http\Request;
use Session;

class EmploymentController extends Controller
{



    public function create()
    {
        return view ('employment.create');
    }


    public function createSecondForm()
    {
        return view ('employment.create_second');
    }



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
         $employment->candidate_id= $request->session()->get('candidate_id');

         $employment->save();

         Session::flash ('success', 'The candidate employment form has been successfuly completed!');
         
         return redirect()->route('declaration.create');

    }

      public function storeSecondForm(Request $request)
    {
         $this ->validate ($request, array( 
                        'company'=>' max :100'
                        ,'job_title'=>'max :100'
                        , 'ex_salary'=>' max :100'
                         ,'start_date'=>'date'
                         ,'end_date'=>'date'
                         ,'leave_reason'=>'max:100') );

         $employment = new Employment;
         $employment-> company = $request->company;
         $employment-> job_title = $request->job_title;
         $employment-> ex_salary = $request->ex_salary;
         $employment-> start_date = $request->start_date;
         $employment-> end_date = $request->end_date;
         $employment-> leave_reason = $request->leave_reason;
         $employment->candidate_id= $request->session()->get('candidate_id');

         $employment->save();

         Session::flash ('success', 'The candidate employment form has been saved');
         
         return redirect()->route('employment.create');

    }






}

