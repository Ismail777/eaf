<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Candidate;
use App\Education;
use App\Employment;
use PDF;


class CandidateController extends Controller
{

  public function __construct(){
        $this ->middleware ('auth:admin') ;  // Limit the featured of this controller to logged in users you may add (except or only is an array)
    }


    public function index()
    {
        
        $candidates = Candidate::orderBy('id','desc')->paginate(10);
        return view ('candidate.index')->withCandidates($candidates);


    }


   public function search(){

        $search = \Request::get('search');
        $candidates = Candidate::where('name','like','%'.$search.'%')->orderBy('id')->paginate(5); 
        return view ('candidate.index')->withCandidates($candidates);
   }


   public function pdf ($id,Request $request){
    $candidate = Candidate::find($id);
    $educations = Education::where('candidate_id',$candidate->id)->get()->toArray();
    $employments = Employment::where('candidate_id',$candidate->id)->get()->toArray();

   
      
   $pdf = PDF::loadview('candidate.show_pdf',['candidate'=>$candidate,'educations'=>$educations,'employments'=>$employments]);
       return $pdf->stream ('candidate.pdf');

        
    } 

    public function interviewUpdate (Request $request,$id){
      $candidate = Candidate::find($id);
      
          $candidate->interview = $request->interview;
          $candidate->save();
      Session::flash ('success', 'Interview status has been updated.');
      return back();
    
    }

    public function show($id,Request $request)
    {
        $candidate= Candidate::find ($id);
        
        return view ('candidate.show') -> with ('candidate', $candidate);

    }

    

   

    public function edit($id)
    {
         $candidate = Candidate::find($id);
        return view ('candidate.edit') -> with ('candidate', $candidate);
      }




    public function update(Request $request, $id)
    {
           $this ->validate ($request, array('name' => 'required | max:255' ,
                                        'nric' => 'required' ,
                                        'address' => 'required | max:255 ' ,
                                        'mobile_no'=>'required'
                                        ,'email'=>'required|max:255'
                                        ,'birthday'=>'required'
                                        ,'epf'=>'max:255'    
                                        ,'martial_status'=>'required | max:255'
                                        ,'spouse_occupation'=>'max:255'
                                        ,'kids_no'=>''
                                       
                                                                    )) ;
        $candidate = Candidate::find ($id);
        $candidate -> name = $request -> input('name');
        $candidate -> nric = $request -> input('nric');
        $candidate -> address = $request -> input('address');
        $candidate -> mobile_no = $request -> input('mobile_no');
        $candidate -> email = $request -> input('email');
        $candidate -> birthday = $request -> input('birthday');
        $candidate -> epf = $request -> input('epf');
        $candidate -> martial_status = $request -> input('martial_status');
        $candidate -> spouse_occupation = $request -> input('spouse_occupation');
        $candidate -> kids_no = $request -> input('kids_no');
        

        $candidate->save();
        Session::flash ('success', 'Candidates info has been changes.');

        return redirect()->route('candidate.show', $candidate->id);




       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate= Candidate::find($id);
         $candidate -> delete();
        Session::flash ('success', 'The candidate has been successfuly deleted');
        return redirect ()-> route('candidate.index');
      }
}

