<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Session;
use Mail;
use App\Http\Requests;


class EmailsController extends Controller
{
	 public function __construct(){
        $this ->middleware ('auth:admin') ; 
    }

     public function getInvitation($id ){
        $candidate = Candidate::Find($id);
        return view ('candidate.emailForm')->with ('candidate', $candidate);
    }

    public function postInvite($id, Request $request){
            $this->validate ($request, [
                  'time'=>'required',
                  'place'=>'required',
                  'interviewer'=>'required',
                  'notes'=>'max:100',
                  ]);

        $candidate= Candidate::Find ($id);
        $data = array('email'=> $candidate->email
                    , 'time'=> $request->time
                    , 'place'=> $request->place
                    , 'interviewer'=> $request->interviewer
                    , 'notes'=> $request->notes
                    , 'name'=> $candidate->name );


      Mail::send('emails.InvitationEmail', $data, function($message) use  ($data){  //Mail::queue is to send many mails data can be accessed in the view as it is
        $message->from('hr_eaf@fresco.com.my');
          $message->to($data['email']);
            $message->subject('Invitaion to interview | Fresco');        
      });  
      Session::flash ('success', 'Your Email Was Sent!');
      return redirect()->route('candidate.show', $candidate->id);

    }

     public function postProfile($id) {
          $candidate= Candidate::Find ($id);
          $data = array('email'=> $candidate->email,
                       'name'=> $candidate->name,
                       'nric'=> $candidate->nric,
                       'address'=> $candidate->address,
                       'mobile_no'=> $candidate->mobile_no,
                       'birthday'=> $candidate->birthday,
                       'gender'=> $candidate->gender,
                       'epf'=> $candidate->epf,
                       'martial_status'=> $candidate->martial_status,
                       'spouse_occupation'=> $candidate->spouse_occupation,
                       'kids_no'=> $candidate->kids_no,
                       'birth_country'=> $candidate->birth_country,
                       'citizenship'=> $candidate->citizenship,
                       'religion'=> $candidate->religion,
                       'race'=> $candidate->race,
                       'int_time'=> $candidate->position->int_time,
                       'int_date'=> $candidate->position->int_date,
                       'position'=> $candidate->position->position,
                       'pre_date'=> $candidate->position->pre_date,
                       'pre_outlet'=> $candidate->position->pre_outlet,
                       'salary'=> $candidate->position->salary,
                       'source'=> $candidate->position->source,
                       'recomment_name'=> $candidate->position->recommend_name);

      Mail::send('emails.candidate_profile', $data, function($message) use  ($data){  
        $message->from('hr_eaf@fresco.com.my');
          $message->to($data['email']);
            $message->subject('Fresco Employment Form');        
      });  

      Session::flash ('success','The email has been sent to your inbox');
      return redirect ('/');

     }
}
