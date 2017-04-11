<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Candidate;
use App\Outcome;

class OutcomeController extends Controller
{
  
   public function __construct(){
        $this ->middleware ('auth:admin') ; 
      }
        
  public function create($id,Request $request)
    {
        $candidate= Candidate::find ($id);
        return view ('outcome.create')->with ('candidate', $candidate);

    }
   public function store($candidateId, Request $request){

   	$this->validate ($request, ['outcome'=>'required'
   					,'remarks'=>'max:500'
   		]);

   	$outcome = new Outcome;
   	$outcome->outcome = $request->outcome;
   	$outcome->remarks = $request->remarks;
   	$outcome->candidate_id = $candidateId;
   	$outcome->save();

   	  Session::flash ('success', 'The outcome decision has been successfuly saved.');
      return redirect()->route ('candidate.index');

   }

   public function show ($candidateId){
   	$candidate = Candidate::find ($candidateId);
   	return view ('outcome.show')->with ('candidate',$candidate);

   }

  

}
