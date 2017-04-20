<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Session;

class personalInfoController extends Controller
{
    
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
                                        ,'spouse_occupation_status'=>'max:3'
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
         $candidate-> spouse_occupation_status = $request->spouse_occupation_status;
         $candidate-> spouse_occupation = $request->spouse_occupation;
         $candidate-> kids_no = $request->kids_no;
         $candidate-> birth_country = $request->birth_country;
         $candidate-> citizenship = $request->citizenship;
         $candidate-> religion = $request->religion;
         $candidate-> race = $request->race;
       
         $candidate-> save();
            $request->session()->put('candidate_id', $candidate->id);
     Session::flash ('success', 'The candidate description has been successfuly saved!');
    return redirect()->route ('position.create',$candidate_id);

   
         
    }
}
