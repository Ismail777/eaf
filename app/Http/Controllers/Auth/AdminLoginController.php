<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller

{
	public function __construct (){
		$this ->middleware('guest:admin');
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
  	  		return redirect()->back()->withInput($request->only('email','remember'));

  	
  }

}
