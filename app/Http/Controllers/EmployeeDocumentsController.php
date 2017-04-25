<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Session;
use App\EDocument;
use Auth;
use Image;
use Illuminate\Support\Facades\Storage;


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
         return view ('edocuments.create')->withEmployee($employee);

    }

   


    public function store(Request $request)
    {
       $this->validate ($request, array('grandparents'=>'required',
                                        'parents_siblings'=>'required',
                                        'education_cert'=>'required',
                                        'employment_slip'=>'required',
                                        'typhoid'=>'required',
                                        'hygenic_cert'=>'required',
                                        'nric'=>'required',
                                        'bank_statment'=>'required'
                                    ));

       $edocument = new EDocument;

       $edocument->employee_id = $request->id;
       $edocument->grandparents = $request->grandparents;
       $edocument->parents_siblings = $request->parents_siblings;
       $edocument->bank_info = $request->bank_info;

        
        $file = $request->file('education_cert');
        $ext = $file->extension();
        $name = time().$request->id.'.'.$ext;
        $file->storeAs('/public/documents/',$name);
        $edocument->education_cert= $name;

        $file2 = $request->file('employment_slip');
        $ext = $file2->extension();
        $name2= time().'_'.$request->id.'.'.$ext;
        $file2->storeAs('/public/documents/',$name2);
        $edocument->employment_slip = $name2;

        $file3 = $request->file('typhoid');
        $ext = $file3->extension();
        $name3= time().'_'.$request->id.'.'.$ext;
        $file3->storeAs('/public/documents/',$name3);
        $edocument->typhoid=$name3;

        $file4 = $request->file('hygenic_cert');
        $ext = $file4->extension();
        $name4= time().'_'.$request->id.'.'.$ext;
        $file4->storeAs('/public/documents/',$name4);
        $edocument->hygenic_cert=$name4;

        $file5 = $request->file('nric');
        $ext = $file5->extension();
        $name5= time().'_'.$request->id.'.'.$ext;
        $file5->storeAs('/public/documents/',$name5);
        $edocument->nric=$name5;

        $file6 = $request->file('bank_statment');
        $ext = $file6->extension();
        $name6= time().'_'.$request->id.'.'.$ext;
        $file6->storeAs('/public/documents/',$name6);
        $edocument->bank_statment=$name6;


       if ($request->hasFile('employee_image'))
       {
        $image = $request->file ('employee_image');
        $filename = time().'.'. $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        image::make($image)->resize(400,400)->save($location); 
        $edocument->employee_image = $filename;
       } 
       else  return 'No File Was Selected'; 

       $edocument->save();

      Session::flash ('success', 'The candidate description has been successfuly saved!');
     return redirect()->route ('employeeDocs.show',$edocument->id);
     }


    public function show($id)
    {
        $edocument = EDocument::find ($id);
        return view ('edocuments.show')->withEdocument($edocument);
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
