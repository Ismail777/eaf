<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Declaration;
use Session;
use App\Candidate;

class DeclarationController extends Controller
{
            


	 public function create()
    {
        return view ('declaration.create');
    }


 public function store(Request $request)
    {
        $this ->validate ($request, array( 
        				'employed_by_fresco'=>'required'
        			    ,'relatives_in_fresco'=>'required'
        				,'food_cert'=>'required'
        				,'typhoid'=>'required'
        				,'phy_disability'=>'required'
        				,'illness'=>'required'
        				,'jaya_grocer'=>'required'
        				,'fresco'=>'required' ) );

       $declaration= new Declaration;

 	$declaration->employed_by_fresco = $request->employed_by_fresco;
 	$declaration->relatives_in_fresco = $request->relatives_in_fresco;
 	$declaration->relative_name = $request->relative_name;
 	$declaration->food_cert = $request->food_cert;
 	$declaration->food_cert_date = $request->food_cert_date;
 	$declaration->typhoid = $request->typhoid;
 	$declaration->typhoid_date = $request->typhoid_date;
 	$declaration->phy_disability = $request->phy_disability;
 	$declaration->phy_disability_type = $request->phy_disability_type;
 	$declaration->illness = $request->illness;
 	$declaration->illness_type = $request->illness_type;
 	$declaration->jaya_grocer = $request->jaya_grocer;
 	$declaration->fresco = $request->fresco;
    $declaration->candidate_id= $request->session()->get('candidate_id');

 	$declaration -> save();

    return redirect()->route ('form_complete.create',$candidate_id);


   }

   public function getFormComplete($id){

        $candidate = Candidate::find ($id);
        return view ('form_complete')->with ('candidate',$candidate);
   }


}   
