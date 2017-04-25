<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Session;
use Mail;
use App\Http\Requests;
use App\Mail\FrescoEAF;
use App\Mail\EafProfile;

class EmailsController extends Controller
{
	 public function __construct(){
        $this ->middleware ('auth:admin',['except'=>'postProfile']); 
    }

     public function getInvitation($id ){
        $candidate = Candidate::Find($id);
        return view ('candidate.emailForm')->with ('candidate', $candidate);
    }

    public function postInvite($id, Request $request){
            $this->validate ($request, [
                  'date'=>'required',
                  'time'=>'required',
                  'place'=>'required',
                  'interviewer'=>'required',
                  'notes'=>'max:100',
                  ]);

        $candidate= Candidate::Find ($id);
        $data = array('email'=> $candidate->email
                    , 'time'=> $request->time
                    , 'date'=> $request->date
                    , 'place'=> $request->place
                    , 'interviewer'=> $request->interviewer
                    , 'notes'=> $request->notes
                    , 'name'=> $candidate->name );

        
      Mail::send('emails.InvitationEmail', $data, function($message) use  ($data){  
        $message->from('hr_eaf@fresco.com.my');
          $message->to($data['email']);
            $message->subject('Invitaion to interview | Fresco');        
      });  
      
      Session::flash ('success', 'Your Email Was Sent!');
      return redirect()->route('candidate.show', $candidate->id);

    }

     public function postProfile($id) {
      
          $candidate= Candidate::Find ($id);
          Mail::to($candidate->email)->send(new EafProfile($candidate));

      Session::flash ('success','Your EAF profile has been sent to your inbox');
      return redirect ('/');

     }


   public function sendRejectionLetter ($id){

        $candidate = Candidate::find ($id);
        Mail::to($candidate->email)->send(new FrescoEAF($candidate));
   
      Session::flash ('success','A Rejection letter has been sent to the candidate');
      return redirect()->route ('candidate.index');

   }
}
