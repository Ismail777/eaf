<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use Session;
use App\Candidate;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('position.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate ($request, array('int_time'=>'required'
            ,'int_date'=>'date|required'
            ,'position'=>'required'
            ,'pre_date'=>'required|date'
            ,'pre_outlet'=>'required|max:255'
            ,'salary'=>'required|max:255'
            ,'source'=>'required|max:255'
            ,'recommend_name'=>'max:255'));

        $position = new Position;

        $candidate_id = Candidate::find($id);   //Need help here
    
        $position-> int_time = $request->int_time;
        $position-> candidate_id = $candidate_id;
        $position-> int_date = $request->int_date;
        $position-> position = $request->position;
        $position-> pre_date = $request->pre_date;
        $position-> pre_outlet = $request->pre_outlet;
        $position-> salary = $request->salary;
        $position-> source = $request->source;
        $position-> recommend_name = $request->recommend_name;

        $position -> save();
         Session::flash ('success', 'The position info has been successfuly saved!');

         return redirect()->route ('education.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
