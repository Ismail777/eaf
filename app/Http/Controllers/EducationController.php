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

        
           
    }


    public function storeSecondForm(Request $request)
    {
         
        $this ->validate ($request, array(
            'school'=>'max:255',
            'start_date'=>'max:255 ',
            'end_date'=>'max:255  ',
            'cert'=>'max:255',
            'cgpa'=>'max:255'));

        $education = new Education;

        $education-> school = $request->school;
        $education-> start_date = $request->start_date;
        $education-> end_date = $request->end_date;
        $education-> cert = $request->cert;
        $education-> cgpa = $request->cgpa;
        $education->candidate_id= $request->session()->get('candidate_id');

        $education->save();

        Session::flash ('success', 'The education info has been successfuly saved!');

        return redirect()-> route('employment.create');     
    }



}
