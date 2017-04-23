<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;
use EDocument;
use Auth;
use Image;


class EmployeeDocumentsController extends Controller
{ 
    public function __construct(){
       $this ->middleware ('auth') ; 
   }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $id = Auth::user()->employee_id;

         $employee = Employee::find($id);

         return view ('employee.documents.create')->withEmployee('employee');
    }

   


    public function store(Request $request)
    {
       $this->validate ($request, array('grandparents'=>'required',
                                        'parents_siblings'=>'required',
                                        ''));

       $edocument = new EDocument;

       $edocument->employee_id = $request->employee_id;
       $edocument->grandparetns = $request->grandparent;
       $edocument->parents_siblings = $request->parents_siblings;
       


       if ($request->hasFile('employee_image')){
        $image = $request->file ('employee_image');
        $filename = time().'.'. $image->getClientOriginalExtention();
        $location = storage_path('app/storage/employees/images'.$filename);
        image::make($image)->resize(400,400)->save($location); 
        $edcocument->employee_image = $filename;
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        

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
