<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use App\Http\Requests;
use App\Candidate;
use App\Education;
use App\Employment;
use PDF;


class CandidateController extends Controller
{

  public function __construct(){
        $this ->middleware ('auth') ;  // Limit the featured of this controller to logged in users you may add (except or only is an array)
    }

    

    public function getInvite(){

        return view ('candidate.emailForm');
    }

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


    public function show($id,Request $request)
    {
        $candidate= candidate::find ($id);
        $educations = Education::where('candidate_id',$candidate->id)->get();
        $employments = Employment::where('candidate_id',$candidate->id)->get();

        if ($request->has ('download')){
             $pdf = PDF::loadView('candidate.show');
             return $pdf->download('candidate.show');
        }

        return view ('candidate.show')-> with ('candidate', $candidate)->with ('educations',$educations)->with ('employments',$employments);
    }



    public function postInvite($id, Request $request){

        $candidate= candidate::find ($id);

        $data = array('email'=> $candidate->email
                    , 'subject'=> $request->subject
                    , 'bodyMessage'=> $request->message );
      Mail::send('emails.contact', $data, function($message) use  ($data){  //Mail::queue is to send many mails data can be accessed in the view as it is
        $message->from('fresco_marketing@gmail.com');
          $message->to($data['email']);
            $message->subject($data['subject']);
              
      });  
        Session::flash ('success', 'Your Email Was Sent!');
      return redirect('/candidate');

    }

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
