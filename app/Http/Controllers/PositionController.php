<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use Session;
use App\Candidate;

class PositionController extends Controller
{



    public function create()
    {
        return view ('position.create');
    }

   
    public function store(Request $request)
    {
        $this ->validate ($request, array(
                                            'position'=>'required'
                                            ,'pre_date'=>'required|date'
                                            ,'pre_outlet'=>'required|max:255'
                                            ,'salary'=>'required|max:255'
                                            ,'source'=>'required|max:255'
                                            ,'recommend_name'=>'max:255'));
        $position = new Position;
      
        $position-> position = $request->position;
        $position-> pre_date = $request->pre_date;
        $position-> pre_outlet = $request->pre_outlet;
        $position-> salary = $request->salary;
        $position-> source = $request->source;
        $position-> recommend_name = $request->recommend_name;
        $position->candidate_id= $request->session()->get('candidate_id');
       

        $position->save();
        Session::flash ('success', 'The position info has been successfuly saved!');
        return redirect()->route ('education.create');

    }

 }