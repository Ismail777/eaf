<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Candidate;
use App\Position;


class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $candidates = Candidate::all();
        return view ('candidate.index')->withCandidates($candidates);


    }

   public function search(){

        $search = \Request::get('search');
        $candidates = Candidate::where('name','like','%'.$search.'%')->orderBy('id')->paginate(3); 
        return view ('candidate.index')->withCandidates($candidates);
   }

    public function create()
    {
        return view ('candidate.create');
    }

   
    public function store(Request $request)
    {
         $this ->validate ($request, array('name' => 'required | max:255' ,
                                        'nric' => 'required' ,
                                        'address' => 'required | max:255 ' ,
                                        'mobile_no'=>'required'
                                        ,'email'=>'required|max:255'
                                        ,'birthday'=>'required'
                                        ,'epf'=>'max:255'
                                        ,'gender'=>'required'
                                        ,'martial_status'=>'required | max:255'
                                        ,'spouse_occupation'=>'max:255'
                                        ,'kids_no'=>''
                                        ,'birth_country'=>'required'
                                        ,'citizenship'=>'required'
                                        ,'religion'=>'required'
                                        ,'race'=>'required'
                                        )) ;
         $candidate = new Candidate;

         $candidate-> name = $request->name;
         $candidate-> nric = $request->nric;
         $candidate-> address = $request->address;
         $candidate-> mobile_no = $request->mobile_no;
         $candidate-> email = $request->email;
         $candidate-> birthday = $request->birthday;
         $candidate-> epf = $request->epf;
         $candidate-> gender = $request->gender;
         $candidate-> martial_status = $request->martial_status;
         $candidate-> spouse_occupation = $request->spouse_occupation;
         $candidate-> kids_no = $request->kids_no;
         $candidate-> birth_country = $request->birth_country;
         $candidate-> citizenship = $request->citizenship;
         $candidate-> religion = $request->religion;
         $candidate-> race = $request->race;
         $candidate->position_id= $request->session()->get('pos_key');
         $candidate->education_id= $request->session()->get('ed_key');
         $candidate->employment_id= $request->session()->get('emp_key');
         $candidate->declaration_id= $request->session()->get('dec_key');


         
         $candidate-> save();
     Session::flash ('success', 'The candidate description has been successfuly saved!');
    return redirect()->route ('candidate.index');

   
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate= candidate::find ($id);
        return view ('candidate.show')-> with ('candidate', $candidate);
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
