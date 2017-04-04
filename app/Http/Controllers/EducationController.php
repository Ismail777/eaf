<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Session;

class EducationController extends Controller
{
   
    public function index()
    {
        //
    }



    public function create()
    {
        return view ('education.create');
    }


    public function createSecondForm()
    {
        return view ('education.create_second');
    }

    public function store(Request $request)
    {
        $this ->validate ($request, array(
            'school'=>'required',
            'start_date'=>'required | date ',
            'end_date'=>'required | date ',
            'cert'=>'required | max:255',
            'cgpa'=>'required'));

        $education = new Education;

        $education-> school = $request->school;
        $education-> start_date = $request->start_date;
        $education-> end_date = $request->end_date;
        $education-> cert = $request->cert;
        $education-> cgpa = $request->cgpa;
        $education->candidate_id= $request->session()->get('candidate_id');

        $education->save();

         Session::flash ('success', 'The candidate education form has been successfuly completed!');
         
         return redirect()->route('employment.create');


        
           
    }

      public function storeSecondForm(Request $request)
    {
        $this ->validate ($request, array(
            'start_date'=>'date ',
            'end_date'=>' date ',
            'cert'=>' max:255'
            ));

        $education = new Education;

        $education-> school = $request->school;
        $education-> start_date = $request->start_date;
        $education-> end_date = $request->end_date;
        $education-> cert = $request->cert;
        $education-> cgpa = $request->cgpa;
        $education->candidate_id= $request->session()->get('candidate_id');

        $education->save();

        Session::flash ('success', 'Second Education form has been saved.');
         
        return redirect()->back();


        
           
    }





}
