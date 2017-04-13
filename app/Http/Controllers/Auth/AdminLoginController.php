<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class AdminLoginController extends Controller

{
	public function __construct (){
		$this ->middleware('guest');
	}

  public function showLoginForm() {
    return view ('auth.admin-login');

  }

  public function login(Request $request){

  	//1-Validate the form data
  	$this->validate($request, [
  		'email'=>'required | email'
  		,'password'=>'required|min:6']);

  	//2-attemp user login
  	if (
  	Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember) ) {
  		//3- success->redirect to the intended page
  		return redirect()->intended(route('candidate.index'));
  	//4-unsuccessful redirect back to the for mwith their data
  	}
          Session::flash ('danger','The credentials you entered did not match our database records');
  	  		return redirect()->back()->withInput($request->only('email','remember'));

  	
  }

}
