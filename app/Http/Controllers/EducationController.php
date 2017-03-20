<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

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
        $request->session()->put('ed_key', $education->id);

        return redirect()-> route('employment.create');        
    }

}
