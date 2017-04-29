<head>
<link rel="stylesheet" type="text/css" href="profile.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
@include ('partials._emp-nav')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ asset("images/".$edocument->employee_image)}}" " alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           {{$edocument->employee->name}}</h4>
                        <cite title="address">{{$employee->candidate->address}}<i class="glyphicon glyphicon-map-marker">
                        </i></cite>
                        <p>
                        	 <i class="glyphicon glyphicon-user"></i>Staff Number: {{$employee->staff_number}}  
                            <br/>
                             <i class="glyphicon glyphicon-earphone"></i>Phone Number: {{$employee->candidate->mobile_no}}  
                            <br/>
                            <i class="glyphicon glyphicon-envelope"></i> {{$employee->candidate->email}}  
                            <br/>
                    
                            <i class="glyphicon glyphicon-gift"></i>   {{$employee->candidate->birthday}}
                            <br>
							<i class="glyphicon glyphicon-circle-arrow-down"></i> Outlet:   {{$employee->outlet}}
                            </p>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

	<ul>
	
		<li><b>Grandparents:</b> {{$edocument->grandparents}}</li>

		<li><b>Parents And Siblings:</b> {{$edocument->parents_siblings}}</li>

		<li><b>Bank Information:</b> {{$edocument->bank_info}}</li>
		<hr>

		<h2>Documents  <i class="glyphicon glyphicon-download-alt"></i>  </h2><i style="color: red;">Right Click then "Save link as" To Download</i>

		<li><a href="{{asset("storage/documents/".$edocument->bank_statment)}}">Bank Statment</a> </li>
		<li> <a href="{{asset("storage/documents/".$edocument->hygenic_cert)}}">Hygine Certification</a> </li>
		<li><a href="{{asset("storage/documents/".$edocument->typhoid)}}">Typhoid Certificate</a></li>
		<li><a href="{{asset("storage/documents/".$edocument->employment_slip)}}">Past Employment Slip</a></li>
		<li><a href="{{asset("storage/documents/".$edocument->education_cert)}}"">Past Education Certificate</a></li>
		<li><a href="{{asset("storage/documents/".$edocument->nric)}}" >NRIC</a></li>
	</ul>